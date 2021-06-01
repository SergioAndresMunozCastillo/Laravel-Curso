<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ReadThreadsTest extends TestCase
{
  use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */

     public function setUp(){
       parent::setUp();

       $this->thread = factory('App\Thread')->create();
     }

    public function user_can_browse_threads()
    {

        //$thread = factory('App\Thread')->create();

        $response = $this->get('/threads');

        $response->assertSee($this->thread->title);


    }

    public function user_can_read_a_single_thread()
    {
      //$thread = factory('App\Thread')->create();

      $response = $this->get('/thread/' . $this->thread->id);

      $response->assertSee($thread->title);

    }

    public function user_can_read_replies_that_are_associated_with_a_thread(){
      $reply = factory('App\Reply')->create(['thread_id' => $this->thread_id]);

      $this->get('/threads/' . $this->thread->id)->assertSee($reply->body);
    }
}
