@extends('layout')

@section('content')

<div id="body">
  <h1><span>mustacchio started</span></h1>
  <div>
    <img src="images/photographer.jpg" alt="">
    <div class="article">

      <ul>
        @foreach ($articles as $article)
        <li>
          <h3>{{ $article->title}}</h3>
          <p> <a href="/articles/{{ $article->id }}">{{ $article->excerpt}}</a> </p>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
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
