@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Forum Thread</div>

                <div class="panel-body">
                  @foreach($threads as $thread)
                    <article>
                      <div class="level">
                        <h4  class="flex">

                        <a href="{{ $thread->path() }}">{{ $thread->title }}</a></h4>

                        <a href="{{ $thread->path() }}">{{ $thread->replies()->count() }} {{ str_plural('reply', $thread->replies()->count()) }}</a>
                      </div>

                      <div class="body">
                        {{ $thread->body }}
                      </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
