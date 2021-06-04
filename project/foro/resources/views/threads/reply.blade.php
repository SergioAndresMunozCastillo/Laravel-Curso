<div class="panel panel-default" id="reply-{{ $reply->id }}">
  <div class="panel-heading">

    <div class="level">
      <h5 class="flex">
        <a href="#">  {{ $reply->owner->name }}</a> said {{ $reply->created_at}}
      </h5>

        <form class="" action="/replies/{{ $reply->id }}/favorites" method="POST">
          @csrf
          <button type="submit" class="btn btn-default" {{ $reply->isFavorited()? 'disabled' : '' }}>
            {{ $reply->favorites()->count() }} {{ str_plural('Favorite', $reply->favorites()->count()) }}
          </button>
        </form>
    </div>
  </div>

    <div class="panel-body">
      {{ $reply->body }}
    </div>

    @can ('update', $reply)
        <div class="panel-footer">
            <form method="POST" action="/replies/{{ $reply->id }}">
                @csrf
                {{ method_field('DELETE') }}

                <button type="submit" class="btn btn-danger btn-xs">Delete</button>
            </form>
        </div>
    @endcan
</div>
<hr>
