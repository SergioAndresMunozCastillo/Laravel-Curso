<?php

function create($class, $attributes = [], $times = null)
{
  return factory($classm $times)->create($attributes);
}

function make($class, $attributes = [], $times = null)
{
  return factory($class, $times)->create($attributes);
}
