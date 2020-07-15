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


Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/tweets', 'TweetyController@index')->name('tweets');
    Route::post('/tweets', 'TweetyController@store');
    Route::post('/profile/{user:username}/follow', 'FollowsController@store');
    Route::get('/profile/{user:username}/edit', 'ProfilesController@edit')->middleware('can:edit,user');
    Route::patch('/profile/{user:username}', 'ProfilesController@update')->middleware('can:edit,user');
    Route::get('/explore', 'ExploreController@index');

});

Route::get('/profile/{user:username}', 'ProfilesController@show')->name('profile');



