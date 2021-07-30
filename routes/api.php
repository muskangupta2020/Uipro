<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/totaldownline','ApiController@downline');
Route::get('/product','ApiController@product');
 Route::get('/coupanamount','CoupanController@getAmount');
 Route::get('/brandsearch/product','ApiController@BrandData');
Route::get('/categories','ApiController@category');
Route::get('/advancecoupan','ApiController@advance');