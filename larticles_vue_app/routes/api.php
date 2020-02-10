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

Route::get('teste', function(){
    phpinfo();
});
// List articles
Route::get('articles', 'ArticleController@index');

// List single article
Route::get('article/{id}', 'ArticleController@show');

// Create new article
Route::post('article', 'ArticleController@store');

// Update article
Route::put('article', 'ArticleController@store');

// Delete article
Route::delete('article/{id}', 'ArticleController@destroy');

Route::group(['middleware' => 'auth:api'], function() {
    //   Route::post('logout', 'AuthController@logout');
    //   Route::get('user', 'AuthController@user');
    // Route::get('teste', function(){
    //     phpinfo();
    // });
    // // List articles
    // Route::get('articles', 'ArticleController@index');
    
    // // List single article
    // Route::get('article/{id}', 'ArticleController@show');
    
    // // Create new article
    // Route::post('article', 'ArticleController@store');
    
    // // Update article
    // Route::put('article', 'ArticleController@store');
    
    // // Delete article
    // Route::delete('article/{id}', 'ArticleController@destroy');

  });

// Route::middleware('auth:api')->get('/user', function (Request $request) {
    // return $request->user();
// });