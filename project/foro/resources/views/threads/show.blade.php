@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h2> <a href="#">{{ $thread->creator->name }}</a>
                    posted:
                    {{ $thread->title }}</h2>
                </div>

                <div class="panel-body">
                  {{ $thread->body }}
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="row justify-content-center">
        <div class="col-md-8">
          @foreach($thread->replies as $reply)
              @include('threads.reply')
            @endforeach
        </div>
    </div>

    @if(auth()->check())
    <div class="row justify-content-center">
        <div class="col-md-8">
          <form action="{{ $thread->path() . '/replies'}}" method="POST">
            @csrf
            <div class="form-group">
                <textarea name="body" id="body" class="form-control" placeholder="Have something to say?" rows="5"></textarea>
            </div>
            <button type="submit" name="btn btn-default">Submit</button>
          </form>
        </div>
    </div>
    @else
      <p>Please sign in to participate in this discussion.</p>
    @endif
</div>
@endsection
