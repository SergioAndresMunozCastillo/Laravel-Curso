@extends('layout')

@section('content')

<div id="body">
  <h1><span>mustacchio started</span></h1>
  <div>
    <div class="article">
      @foreach ($article as $articles)
      <h2>{{ $articles->title }}</h2>
      <p>
        <img src="/images/photographer.jpg" alt="">
      </p>

      <p>{!! $articles->body !!}</p>

        <p>
          @foreach ($articles->tags as $tag)
            <a href="/articles?tag={{ $tag->name }}">{{ $tag->name }}</a>
          @endforeach
          @endforeach
        </p>
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
