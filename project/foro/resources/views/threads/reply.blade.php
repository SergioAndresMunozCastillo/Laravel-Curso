<reply :attributes="{{ $reply }}" inline-template v-cloak>
  <div class="panel panel-default" id="reply-{{ $reply->id }}">
    <div class="panel-heading">

      <div class="level">
        <h5 class="flex">
          <a href="#">  {{ $reply->owner->name }}</a> said {{ $reply->created_at}}
        </h5>

          <favorite :reply="{{ $reply }}"></favorite>
          <!--
          <form class="" action="/replies/{{ $reply->id }}/favorites" method="POST">
            @csrf
            <button type="submit" class="btn btn-default" {{ $reply->isFavorited()? 'disabled' : '' }}>
              {{ $reply->favorites()->count() }} {{ str_plural('Favorite', $reply->favorites()->count()) }}
            </button>
          </form>
        -->
      </div>
    </div>

      <div class="panel-body">
        <div v-if="editing">
          <div class="form-group">
            <textarea v-model="body"></textarea>
          </div>
          <button class="btn btn-xs btn-primary" @click="update">Update</button>
          <button class="btn btn-xs btn-link" @click="editing = false">Cancel</button>

        </div>

        <div v-else v-text="body"></div>
      </div>


      @can ('update', $reply)
          <div class="panel-footer level">
            <button class="btn btn-xs mr-1" @click="editing = true">Edit</button>
            <button class="btn btn-xs btn-danger mr-1" @click="destroy">Delete</button>

            <!--
            <form method="POST" action="/replies/{{ $reply->id }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                <button type="submit" class="btn btn-danger btn-xs">Delete</button>
            </form>
            -->

          </div>
      @endcan
  </div>

</reply>
