<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ThreadTest extends TestCase
{

  use DatabaseMigrations;

  protected $thread;
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function setUp()
    {
        parent::setUp();

        $this->thread = factory('App\Thread')->create();
    }

    public function a_thread_has_replies()
    {
        $thread = factory('App\Thread')->create();

        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->thread->replies);
    }

    function a_thread_has_a_creator()
    {
      $thread = factory('App\Thread')->create();

      $this->assertInstanceOf('App\User', $this->thread->user);
    }
}
