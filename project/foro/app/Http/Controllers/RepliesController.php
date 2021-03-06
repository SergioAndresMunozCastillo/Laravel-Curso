<?php

namespace App\Http\Controllers;

use App\Thread;
use App\Reply;
use Illuminate\Http\Request;

class RepliesController extends Controller
{

    public function __construct(){
      $this->middleware('auth');
    }

    public function store($channelId,Thread $thread)
    {
      $thread->addReply([
        'body' => request('body'),
        'user_id' => auth()->id()
      ]);

      return back()->with('flash', 'Your reply has been left.');
    }

      /**
      * Delete the given reply.
      *
      * @param  Reply $reply
      * @return \Illuminate\Http\RedirectResponse
      */
    public function destroy(Reply $reply)
    {
        $this->authorize('update', $reply);

        $reply->delete();

        if (request()->expectsJson()) {
          return response(['status' => 'Reply deleted']);
        }

        return back();
    }

    public function update(Reply $reply)
    {
      $this->authorize('update', $reply);

      $this->validate(request(), ['body' => 'required']);

      $reply->update(request(['body']));
    }
}
