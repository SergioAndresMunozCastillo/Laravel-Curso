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

Route::get('/welcome', function () {
    return "Hola mundo";
});

/*
Route::get('/test', function () {
  $name = request('name');
  //By lettin this and writing ?name=value just after the url que will get the value
  //return $name;

  //return view('test');

});
*/

//222222222222222222222222222222222222222222222222
//Use this to show the data request IN THE VIEW

Route::get('/test', function () {
  $name = request('name');

  //Second argument is an array that contains any key values.
  return view('test', [
    'name' => $name
  ]);
});


//33333333333333333333333333333333333333
/*
Route::get('/posts/{post}', function ($post){
  $posts = [
    'my-first-post' => 'Hello there fellow travelers, this is my first post',
    'my-second-post' => 'I have seen things in the blogging world...'
  ];

  if(! array_key_exists($post, $posts)){
    abort(404, 'Sorry, not enough... elements');
  }
  return view('post', [
    'post' => $posts[$post] ?? 'NOthing to show'
  ]);
});
*/

//4444444444444444444444444444444444444444444444
use App\Http\Controllers\PostsController;

Route::get('/posts/{post}', [PostsController::class, 'show']);
