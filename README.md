# Laravel Restaurant App


# Commands
`php artisan make:controller ControlerNameHere` Helps create the Controller. By default controllers are stored in `app/Http/Controllers`. To create a new folder within this directory, I can add it to the command as follows: `php artisan make:controller admin/CategoriesController`. This creates a folder called 'admin' and the controller file underneath that called 'CategoriesController' which I will place the route logic for the Food Categories.

**In the routes file** link the route to the new function in your controller:
```js
Route::get('/admin/categories/all', 'admin\CategoriesController@index');
```

## User Authentication Scaffolding
```
composer require laravel/ui --dev
```
`php artisan help ui` 

` php artisan ui bootstrap --auth` - Allows for using Bootstrap along with the Auth

```
Laravel Mix Version: 6.0.11 (npm list --depth=0)
Node Version 14.15.5 (node -v):
NPM Version 7.5.6 (npm -v):
```

## issue when scaffolding
I had to fix the following when I created authentication piece
1. Re-add previous CSS to overwritten app.scss, plus add new additions
   1. For next time, rename this file to something else to avoid this
2. re-run npm-install
3. reinstall webpack (not sure if really necessary)
4. re-add this to webpack.mix.js `browserSync({proxy:"localhost:8000"});` as it was removed/overwritten. The browser would not recognize localhost:3000 without this.

## Fixing First and Last Names for Registration of Users
List of Files that were edited for this
```
app/Http/Controllers/Auth/RegisterController.php
app/Models/User.php
database/migrations/2014_10_12_000000_create_users_table.php
resources/views/auth/register.blade.php
resources/views/layouts/admin.blade.php
```
### Registration Page
This was simple. Just copy the `name` element, then replace *most* of the `name` attributes with either `fname` or `lname`. View the code to find which ones I changed that are relevant to the update.


### Registration Controller
For the app to recognize the new fields, `name` was removed, and replaced with `fname` and `lname`

```
protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
```

### User Model
I had to add `fname` and `lname` and remove the `name` in order for the model to recognize the new input fields I needed to capture, from the registration page.
```mysql
protected $fillable = [
        'fname',
        'lname',
        'email',
        'password',
    ];
```

### User Table Migration
I'm actually not sure if I manually edited this myself, or this was done by the `migration` command, but just in case, `fname` and `lane` were added.:
```
 public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }
```



### Admin Page first and last name visibility

In the Dashboard, to get the first and last names visible, I had to edit the `resources/views/layouts/admin.blade.php` file, and replace `{{ Auth::user()->fname }}` with the code below. Since they are variables (handlebars?) I could add a second one to pull out the last name, as I first had trouble with adding that without it giving me an error.
```js
 {{ Auth::user()->fname }} {{ Auth::user()->lname }}
```

