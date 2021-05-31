<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class PostController extends Controller
{
    public funtion show($post){
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
    }
}
