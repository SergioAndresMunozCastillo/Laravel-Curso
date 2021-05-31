<h3 class="font-bold text-xl mb-4">Following</h3>

<ul>
  @forelse(auth()->user()->follows as $user)
  <li class="py-4">
    <div class="flex items-center text-sm">
      <a href="{{ route('profile', $user) }}">
      <img src="{{ $user->avatar }}"
      width="40"
      height="40">
      {{ $user->name }}
    </a>
    </div>
  </li>
  @empty
  <li>No friends yet!!!</li>
  @endforelse
</ul>
