<?php

namespace App\Filters;

use Illuminate\Http\Request;

abstract class Filters{

  protected $request, $builder;

  protected $filters = [];
  /**
  *@@param Request $request
  */

  public function __construct(Request $request)
  {
    $this->request = $request;
  }

  public function apply($builder)
  {
    $this->builder = $builder;


    $this->getFilters()
    ->filter(function($value, $filter){
        return method_exists($this, $filter);
    })
    ->each(function ($value, $filter){
      $this->$filter($value);
    });
/*
    foreach($this->getFilters() as $filter => $value){
      if(method_exists($this, $filter)){
        $this->$filter($value);
      }

      //$this->$filter($this->request->$filter);
    }
*/
    return $this->builder;
  }

  public function getFilters()
  {
    return collect($this->request->only($this->filters));
  }

  /**
  *@param $filter
  *@return bool
  */
  protected function hasFilter($filter): bool
  {
    return method_exists($this, $filter) && $this->request->has($filter);
  }
}
