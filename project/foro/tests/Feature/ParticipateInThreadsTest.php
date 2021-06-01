<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ParticipateInThreadsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function unauthenticated_users_may_not_add_replies()
    {
      $this->expectException('Illuminate\Auth\AuthenticationException');

      $this->post('/threads/1/replies', []);
    }

    public function an_authenticated_user_may_participate_in_forum_threads()
    {
        //Given that we have an authenticated user
        $user = factory('App\User')->create();
        //Add an existing thread
        $thread = factory('App\Thread')->create();

        //When the user adds a reply to the thread
        $reply = factory('App\Reply')->create();
        $this->post('/threads/'.$thread->id.'/replies', $reply->toArray());

        //Then their reply whould be visible on the page
        $this->get($thread->path())->assertSee($reply->body);
    }
}
