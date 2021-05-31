@extends('layout')


@section('head')

<div id="header">
  <a href="index.html" class="logo">
    <img src="images/logo.jpg" alt="">
  </a>
  <ul id="navigation">
    <li class="selected">
      <a href="index.html">home</a>
    </li>
    <li>
      <a href="/about">about</a>
    </li>
    <li>
      <a href="gallery.html">gallery</a>
    </li>
    <li>
      <a href="blog.html">blog</a>
    </li>
    <li>
      <a href="/contact">contact</a>
    </li>
  </ul>
</div>

@endsection
@section ('content')


<div id="body">
  <div id="featured">
    <img src="images/the-beacon.jpg" alt="">
    <div>
      <h2>the beacon to all mankind</h2>
      <span>Our website templates are created with</span>
      <span>inspiration, checked for quality and originality</span>
      <span>and meticulously sliced and coded.</span>
      <a href="blog-single-post.html" class="more">read more</a>
    </div>
  </div>
  <ul>
    <li>
      <a href="gallery.html">
        <img src="images/the-father.jpg" alt="">
        <span>the father</span>
      </a>
    </li>
    <li>
      <a href="gallery.html">
        <img src="images/the-actor.jpg" alt="">
        <span>the actor</span>
      </a>
    </li>
    <li>
      <a href="gallery.html">
        <img src="images/the-nerd.jpg" alt="">
        <span>the nerd</span>
      </a>
    </li>
  </ul>
</div>
<div id="footer">
  <div>
    <p>&copy; 2023 by Mustacchio. All rights reserved.</p>
    <ul>
      <li>
        <a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">twitter</a>
      </li>
      <li>
        <a href="http://freewebsitetemplates.com/go/facebook/" id="facebook">facebook</a>
      </li>
      <li>
        <a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">googleplus</a>
      </li>
      <li>
        <a href="http://pinterest.com/fwtemplates/" id="pinterest">pinterest</a>
      </li>
    </ul>
  </div>
</div>
@endsection
