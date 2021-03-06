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

// Route::middleware('auth:api')->get('/article', function (Request $request) {
//     return $request->user();
// });


Route::get('/articles', 'ArticleController@index');
Route::get('/article_id/{id}', 'ArticleController@show');
Route::post('/article', 'ArticleController@store');
Route::put('/update_article/{id}', 'ArticleController@update');
Route::delete('/delete_article/{id}', 'ArticleController@destroy');
