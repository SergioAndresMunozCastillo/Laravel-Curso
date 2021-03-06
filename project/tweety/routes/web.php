<?php
//DB::listen(function ($query){ var_dump($query->sql, $query->bindings);});
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
  Route::get('/tweets', 'TweetController@index')->name('tweets');
  Route::post('/tweets', 'TweetController@store');
  Route::patch('/profiles/{user}', 'ProfilesController@update');
});

Route::get('/profiles/{user}', 'ProfilesController@show')->name('profile');
Route::get('/profiles/{user}/edit', 'ProfilesController@edit');
Route::post('/profiles/{user}/follow', 'FollowsController@store');
Route::get('/explore', 'ExploreController@index');
