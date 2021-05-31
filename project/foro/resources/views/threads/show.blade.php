@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $thread->title }}</div>

                <div class="panel-body">
                  {{ $thread->body }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
