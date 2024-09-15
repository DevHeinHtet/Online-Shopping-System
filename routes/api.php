<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\V1\Products\ProductController;
use App\Http\Controllers\Api\V1\Category\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'],function(){
    Route::middleware(['guest'])->group(function () {
        Route::controller(AdminController::class)->group(function(){
            Route::post('/login','login')->name('login');
        });
    });
    Route::middleware(['auth:admin-api'])->group(function () {
        Route::controller(AdminController::class)->group(function(){
            Route::get('/logout','logout')->name('logout');
        });
        Route::apiResource('products', ProductController::class);
        Route::apiResource('categories', CategoryController::class);
    });
});
