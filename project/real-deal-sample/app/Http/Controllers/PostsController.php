<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
  public function show($slug){

    //$post = \DB::table('posts')->where('slug', $slug)->first();
    $post = Post::where('slug', $slug)->firstOrFail();
    /*
    $posts = [
      'my-first-post' => 'Hello there fellow travelers, this is my first post',
      'my-second-post' => 'I have seen things in the blogging world...'
    ];

    if(! array_key_exists($post, $posts)){
      abort(404, 'Sorry, not enough... elements');
    }
    */

/*
    if(! $post){
      abort(404);
    }
    */
    return view('post', [
      'post' => $post
    ]);

  }
}
