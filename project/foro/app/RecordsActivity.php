<?php

namespace App;

trait RecordsActivity
{

    protected static function bootRecordsActivity()
    {
        if(auth()->guest()) return;

        foreach(static::getActivitiesToRecord() as $event){
            static::$event(function ($model) use ($event){
                $model->recordActivity($event);
            });
        }
        static::created(function ($thread){
            $thread->recordActivity('created');
          });

          static::deleting(function ($model){
            $model->activity()-delete();
          });
    }


    protected static function getActivitiesToRecord()
    {
        return ['created'];
    }
    protected function recordActivity($event)
    {
      Activity::create([
        'user_id' => auth()->id(),
        'type' => $this->getActivityType($event),
        'subject_id' => $this->id,
        'subject_type' => get_class($this)
      ]);
    }

    protected function getActivityType($event)
    {
        return $event . '_' . strtolower((new \ReflectionClass($this))->getShortName());
    }
}
