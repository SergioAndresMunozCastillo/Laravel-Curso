<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Controllers\ProfilesController;

class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute(){
      return "https://i.pravatar.cc/100?img=" . $this->id;
    }

    public function timeline(){
      // No more usable since Ep. 59 return Tweet::where('user_id', $this->id)->latest()->get();
      $ids = $this->follows()->pluck('id');
      $ids->push($this->id);
      return Tweet::whereIn('user_id', $ids)->latest()->get();
    }

    public function tweets(){
      return $this->hasMany(Tweet::class)->latest();
    }

    public function follow(User $user){
      return $this->follows()->save($user);
    }

    public function follows(){
      return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    public function following(){

    }

    public function getRouteKeyName(){
      return 'username';
    }

    public function setPasswordAttribute($value){
      $this->attributes['password'] = bcrypt($value);
    }
}
