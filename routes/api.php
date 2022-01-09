<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use App\http\Controllers\foodApi;
use App\http\Controllers\ExpressApi;

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

Route::get('/foodapi',[foodApi::class ,'getData']);

Route::get('/expressapi','ExpressApi@getData');


