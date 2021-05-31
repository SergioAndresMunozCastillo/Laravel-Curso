@extends('layout')

@section('content')

  <div id="wrapper">
    <div id="page" class="container">
      <h1>Upate Article</h1>

      <form class="" action="/articles/{{ $article->id }}" method="POST">
         @csrf
         @method('PUT')
        <div class="field">
          <label class="label" for="title">Title</label>
          <div class="control">
            <input type="input" name="title" id="title" value="{{ $article->title }}">
          </div>
        </div>

        <div class="field">
          <label class="label" for="excerpt">Excerpt</label>
          <div class="control">
            <input type="textarea" name="excerpt" id="excerpt" value="{{ $article->excerpt }}">
          </div>
        </div>

        <div class="field">
          <label class="label" for="body">Body</label>
          <div class="control">
            <input type="textarea" name="body" id="body" value="{{ $article->body }}">
          </div>
        </div>

        <div class="field is-grouped">
          <div class="control">
            <button type="submit" class="button is-link">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>

@endsection
