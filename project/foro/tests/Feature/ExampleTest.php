<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends TestCase
{
  use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function user_can_browse_threads()
    {

        $thread = factory('App\Thread')->create();

        $response = $this->get('/threads');

        $response->assertSee($thread->title);


    }

    public function user_can_read_a_single_thread()
    {
      $thread = factory('App\Thread')->create();
      
      $response = $this->get('/thread/' . $thread->id);

      $response->assertSee($thread->title);

    }
}
