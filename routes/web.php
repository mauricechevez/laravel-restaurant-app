<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\admin\FoodItemsController;
use App\Http\Controllers\StaticPagesController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home Page
Route::get('/', function () {
    return view('home');
});

// Admin Dashboard
Route::get('/admin', function(){
    return view('admin/dashboard');
});

// Admin Authentication
Route::get('/admin/register', function(){
    return view('admin/register');
});
Route::get('/admin/login', function(){
    return view('admin/login');
});

// Admin Food Categories
Route::get('/admin/categories/all', [CategoriesController::class,'allCategories']);
Route::get('/admin/categories/create', [CategoriesController::class,'createCategory']);
Route::get('/admin/categories/{id}/edit',[CategoriesController::class,'editCategory']);

// All Food Items
Route::get('/admin/food-items', [FoodItemsController::class,'allFoodItems']);
Route::get('/admin/food-items/{item}/edit', [FoodItemsController::class,'editFoodItems'] );
Route::get('/admin/food-items/create', [FoodItemsController::class,'createFoodItems'] );

// Static Pages
Route::get('/menu', function () {
    return view('food/index');
});
Route::get('/menu/{item}', function () {
    return view('food/single-menu');
});
Route::get('/waitlist',[StaticPagesController::class,'waitlist'] );
Route::get('/contact',[StaticPagesController::class,'contact'] );
Route::get('/offers',[StaticPagesController::class,'offers']);
Route::get('/about', [StaticPagesController::class,'about']);