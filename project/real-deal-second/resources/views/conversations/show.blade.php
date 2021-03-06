@extends('layout.app')

@section('content')
  <p>
    <a href="/conversations">Back</a>
  </p>

  <h1>{{ $conversation->title }}</h1>

  <p class="text-muted">Posted by {{ $conversation->user->name }}</p>

  <div class="">
    {{ $conversation->body }}
  </div>

  <hr>

  @include('conversations.replies')
@endsection
