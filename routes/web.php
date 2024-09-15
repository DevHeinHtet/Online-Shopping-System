<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\AdminController;
use App\Http\Controllers\V1\Product\ProductController;
use App\Http\Controllers\V1\Category\CategoryController;
use App\Http\Controllers\V1\Home\HomeController;

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

//home page

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['guest'])->group(function () {
    Route::view('login','login')->name('login');
    Route::controller(AdminController::class)->group(function(){
        Route::post('check','check')->name('check');
    });
    Route::controller(HomeController::class)->group(function(){
        Route::get('products/detail/{id}','detail')->name('products.detail');
        Route::get('home','index')->name('home');
        Route::get('list','list')->name('products.list');
        Route::get('filter','filter')->name('filter');
    });
});
Route::middleware(['auth:admin'])->group(function () {
    Route::controller(AdminController::class)->group(function(){
    });
    Route::controller(ProductController::class)->group(function(){
        Route::get('products','index')->name('products');
        Route::get('products/add','add')->name('products.add');
        Route::post('products/create','create')->name('products.create');
    });
    Route::controller(CategoryController::class)->group(function(){
        Route::get('categories','index')->name('categories');
        Route::post('category/create','create')->name('category.create');
    });
    Route::view('/categories/add','admin.category.add')->name('categories.add');

});

// Route::get('/{pathMatch}', function(){return view('welcome');})->where('pathMatch',".*");
