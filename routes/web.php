<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/admin', function(){
    return view('admin/dashboard');
});
Route::get('/admin/register', function(){
    return view('admin/register');
});
Route::get('/admin/login', function(){
    return view('admin/login');
});
Route::get('/admin/categories/all', function(){
    return view('admin/categories/all');
});
Route::get('/admin/categories/create', function(){
    return view('admin/categories/create');
});
Route::get('/admin/categories/{id}/edit', function(){
    return view('admin/categories/edit');
});

// ***** Food Items *****
Route::get('/admin/food-items', function(){
    return view('admin/food-items/all');
});


Route::get('/menu', function () {
    return view('food/index');
});
Route::get('/menu/{item}', function () {
    return view('food/single-menu');
});

Route::get('/waitlist', function() {
    return view('pages/waitlist');
});

Route::get('/contact', function () {
    return view('pages/contact');
});

Route::get('/giftcards', function(){
    return view('pages/giftcards');
});
Route::get('/offers', function(){
    return view('pages/offers');
});
Route::get('/about', function(){
    return view('pages/about');
});