@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
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
            @foreach($replies as $reply)
              @include('threads.reply')
            @endforeach

            {{ $replies->links() }}
    @if(auth()->check())
          <form action="{{ $thread->path() . '/replies'}}" method="POST">
            @csrf
            <div class="form-group">
                <textarea name="body" id="body" class="form-control" placeholder="Have something to say?" rows="5"></textarea>
            </div>
            <button type="submit" name="btn btn-default">Submit</button>
          </form>
    @else
      <p>Please sign in to participate in this discussion.</p>
    @endif

        </div>

    <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <p>
                This thread was created 
                {{ $thread->created_at->diffForHumans() }}
                 by <a href="#"> {{ $thread->creator->name }} </a>
                 and currently has {{ $thread->replies()->count() }}
              </p>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
