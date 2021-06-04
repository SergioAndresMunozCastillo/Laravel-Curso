<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigration;

class ProfilesTest extends TestCase
{


  public function an_authenticated_user_can_favorite_any_reply()
  {

    $reply = create('App\Reply');

    $this->post('replies/' . $reply->id - '/favorites');

    $this->assertCount(1, $reply->favorites);
  }
}
