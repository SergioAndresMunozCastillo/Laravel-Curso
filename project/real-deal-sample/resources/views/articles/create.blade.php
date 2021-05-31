@extends('layout')

@section('content')

  <div id="wrapper">
    <div id="page" class="container">
      <h1>New article</h1>

      <form class="" action="/articles" method="POST">
         @csrf
        <div class="field">
          <label class="label" for="title">Title</label>
          <div class="control">
            <input type="input @error('title') is-danger @enderror"
            name="title"
            id="title"
            value="{{ old('title') }}">

            @error('title')
              <p class="help is-danger">{{ $errors->first('title') }}</p>
            @enderror
          </div>
        </div>

        <div class="field">
          <label class="label" for="excerpt">Excerpt</label>
          <div class="control">
            <input type="textarea" name="excerpt" id="excerpt">

            @error('excerpt')
              <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
            @enderror
          </div>
        </div>

        <div class="field">
          <label class="label" for="body">Body</label>
          <div class="control">
            <input type="textarea" name="body" id="body">

            @error('body')
              <p class="help is-danger">{{ $errors->first('body') }}</p>
            @enderror
          </div>
        </div>

        <div class="field">
          <label class="label" for="body">Tags</label>
          <div class="control">
            <select name="tags[]" multiple>

              @foreach($tags as $tag)
              <option value="{{ $tag->id }}">{{ $tag->name }}</option>
              @endforeach
            </select>

            @error('tags')
              <p class="help is-danger">{{ $message }}</p>
            @enderror
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
