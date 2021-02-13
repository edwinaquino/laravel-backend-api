<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\CEOController;

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

# OLD WAY
//Route::post('/register', 'API/AuthController@register');
//Route::post('/login', 'API/AuthController@login');
//Route::apiResource('/ceo', 'API/CEOController')->middleware('auth:api');

# NEW WAY LARAVEL 8
//https://stackoverflow.com/questions/63807930/target-class-controller-does-not-exist-laravel-8


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', 'App\Http\Controllers\API\AuthController@login');
Route::apiResource('/ceo', 'App\Http\Controllers\API\CEOController')->middleware('auth:api');
