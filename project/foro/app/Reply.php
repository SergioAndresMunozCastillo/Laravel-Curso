<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Favoritable;

class Reply extends Model
{

  use RecordsActivity;

    protected $guarded = [];

    protected $with = ['owner', 'favorites'];

    protected $appends = ['favoritesCount', 'isFavorited'];

    public function owner()
    {
      return $this->belongsTo(User::class, 'user_id');
    }

    public function favorites()
    {
      return $this->morphMany(Favorite::class, 'favorited');
    }

    public function favorite()
    {
      $attributes = ['user_id' =>auth()->id()];

      if(! $this->favorites()->where($attributes)->exists()){
          return $this->favorites()->create($attributes);
      }

    }

    public function isFavorited()
    {
      return $this->favorites()->where('user_id', auth()->id())->exists();
    }

    public function thread()
    {
      return $this->belongsTo(Thread::class);
    }

    public function path()
    {
        return $this->thread->path() . "#reply-{$this->id}";
    }

}
