<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', 'App\Http\Controllers\Api\ProductApiController@index')->name('api.product.index');
Route::get('/products/{id}', 'App\Http\Controllers\Api\ProductApiController@show')->name('api.product.show');

Route::get('/v2/products', 'App\Http\Controllers\Api\ProductApiControllerV2@index')->name('api.v2.product.index');
Route::get('/v2/products/{id}', 'App\Http\Controllers\Api\ProductApiControllerV2@show')->name('api.v2.product.show');
Route::post('/v2/products/save', 'App\Http\Controllers\Api\ProductApiControllerV2@store')->name('api.v2.product.store');

Route::get('/v3/products', 'App\Http\Controllers\Api\ProductApiControllerV3@index')->name('api.v3.product.index');
Route::get('/v3/products/paginate', 'App\Http\Controllers\Api\ProductApiControllerV3@paginate')->name('api.v3.product.paginate');


