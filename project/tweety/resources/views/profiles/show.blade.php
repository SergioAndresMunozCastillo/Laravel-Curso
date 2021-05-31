@extends('layouts.app')

@section('content')
  <header class="mb-6 relative">
    <img
    src="/images/franku.jpg"
    alt=""
    class="mb-2"
    >

    <div class="flex justify-between items-center MB-4">
      <div>
        <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>

        <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
      </div>

      <div class="flex">
        <a href="rouded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit Profile</a>

        <form action="/profiles/{{$user->name}}/follow" method="POST">
          @csrf

          @if(auth()->user()->isNot($user))
          <button type="submit" class="bg-blue-500 rouded-full shadow py-2 px-4 text-white text-xs">
            {{ auth()->user()->following($user) ? 'Unfollow' : 'Follow me' }}
          </button>
          @endif
        </form>

      </div>
    </div>

    <img
    src="{{ $user->avatar }}"
    alt=""
    class="rounded-full mr-2 absolute"
    style="width: 150px; left: calc(50% - 75px); top:47%;"
    width="40"
    height="40"
    >

    <p>THANOSCARTHANOSCARTHANOSCARTHANOSCARTHANOSCARTHANOSCARTHANOSCARTHANOSCAR
    THANOSCARTHANOSCARTHANOSCARTHANOSCARTHANOSCARTHANOSCARTHANOSCARTHANOSCARTHANOS
  THANOSCARTHANOSCARTHANOSCARTHANOSCARTHANOSCARTHANOSCARTHANOSCARTHANOSCARTHANOS
THANOSCARTHANOSCARTHANOSCARTHANOSCARTHANOSCARTHANOSCARTHANOSCARTHANOSCARTHANOSCAR
THANOSCARTHANOSCARTHANOSCARTHANOSCARTHANOSCARTHANOSCARTHANOSCARTHANOSCARTHANOSCAR</p>
  </header>
  <h3>Profile page for {{ $user->name }}</h3>
  @include('_timeline', [
  'tweets' => $user->tweets
  ])
@endsection
