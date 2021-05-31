@extends('layouts.app')

@section('content')
  <form class="" action="/profiles/{{ $user->username }}" method="POST">
    @csrf
    @method('PATCH')

    <div class="mb-6">

      <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="name">
      Name
      </label>

      <input class="border border-grey-400 p-2 w-full" type="text" name="name" id="name" required>

      @error('name')
      <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
      @enderror

    </div>

    <div class="mb-6">

      <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="username">
      Username
      </label>

      <input class="border border-grey-400 p-2 w-full" type="text" name="username" id="username" required>

      @error('username')
      <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
      @enderror

    </div>

    <div class="mb-6">

      <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="email">
      Email
      </label>

      <input class="border border-grey-400 p-2 w-full" type="email" name="email" id="email" required>

      @error('email')
      <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
      @enderror

    </div>

    <div class="mb-6">

      <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="password">
      Password
      </label>

      <input class="border border-grey-400 p-2 w-full" type="password" name="password" id="password" required>

      @error('password')
      <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
      @enderror

    </div>

    <div class="mb-6">

      <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="password_confirmation">
      Password Confirmation
      </label>

      <input class="border border-grey-400 p-2 w-full" type="password" name="password_confirmation" id="password_confirmation" required>

      @error('password_confirmation')
      <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
      @enderror

    </div>

    <div class="mb-6">
      <button class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500" type="submit"> Submit </button>

    </div>
  </form>
@endsection
