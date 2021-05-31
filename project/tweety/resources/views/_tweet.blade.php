<div class="flex p-4">
    <div class="mr-2 flex-shrink-0">
      <a href="{{ route('profile', $tweet->user) }}">
        <img src="{{ $tweet->user->avatar }}"
        alt=""
        class="rounded-full mr-2"
        height="40"
        width="40"
        >
    </a>
    </div>
    <div class="">
      <a href="{{ route('profile', $tweet->user) }}">
      <h5 class="font-bold mb-4">
        {{ $tweet->user->name }}
      </h5>
      <a>
      <p class="text-sm">
        {{ $tweet->body}}
      </p>
    </div>
</div>
