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
                      <label for="title">Title</label>
                      <input type="text" name="title" id="title" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="body">Body</label>
                      <textarea type="body" name="body" id="body" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Publish</button>
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
