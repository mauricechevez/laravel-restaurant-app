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