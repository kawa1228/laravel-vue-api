<?php

use Illuminate\Http\Request;

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

/*
|api/user にget でアクセスした場合、apiの中のauthミドルウェアを実行し、
|function の中身を実行して返す
|Route::middleware('auth:api')->get('/user', function (Request $request) {
|    return $request->user();
|});
*/

Route::get('/user', "API\UserController@index");
