@extends('layouts.app');

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
  
      <div class="level">
        <h5 class="flex">
          
      </div>
    </div>
  
      <div class="panel-body">
        @foreach($profileUser->threads as $thread)
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
        @endforeach
      </div>
  </div>
  <hr>
  
@endsection