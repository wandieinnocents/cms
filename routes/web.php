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
    return view('welcome');
});

// BACKEND ROUTES
// image upload
// Route::resource('/imagess','App\Http\Controllers\ImageUploadController');

// dashboard
Route::get('/dashboard' , 'App\Http\Controllers\AdminPagesController@dashboard');
// orders
Route::get('/orders' , 'App\Http\Controllers\AdminPagesController@view_orders');
// quotes
Route::get('/quotes' , 'App\Http\Controllers\AdminPagesController@quotes');
// add product 
Route::resource('/products','App\Http\Controllers\ProductController');
// add product Category
// Route::resource('/product_categories','App\Http\Controllers\ProductCategoryController');
Route::resource('/categories','App\Http\Controllers\CategoryController');
// project categories
Route::resource('/project_categories','App\Http\Controllers\ProjectCategoryController');
// projects
Route::resource('/projects','App\Http\Controllers\ProjectController');
// team
Route::resource('/teams','App\Http\Controllers\TeamController');
//about
Route::resource('/abouts','App\Http\Controllers\AboutController');
//service
Route::resource('/services','App\Http\Controllers\ServiceController');






