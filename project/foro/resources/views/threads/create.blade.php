@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              @if(auth()->check())
                <div class="card-header">Forum Thread</div>

                <div class="panel-body">
                  <form action="/threads" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="channel_id">Choose a Channel:</label>
                      <select class="form-control" name="channel_id" id="channel_id">
                        <option value="">Choose One</option>
                        @foreach($channels as $channel)
                          <option value="{{ $channel->id }}">{{ $channel->name }}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
                    </div>

                    <div class="form-group">
                      <label for="body">Body</label>
                      <textarea type="body" name="body" id="body" class="form-control">{{ old('body') }}</textarea>
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Publish</button>
                    </div>
                    @if(count($errors))
                    <ul class="alert alert-danger">
                      @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                    @endif
                  </form>

                </div>

                @else
                <p>Please sign in to create a thread.</p>
            </div>
        </div>
    </div>
</div>
@endsection
@endif
