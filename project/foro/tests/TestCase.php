<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    use DatabaseMigrations;

  function it_has_an_owner()
  {
    $reply = factory('App\Reply')->create();

    $this->assertInstanceOf('App\User', $reply->owner);
  }
}
