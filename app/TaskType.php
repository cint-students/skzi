<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskType extends Model
{
    public function task()
    {
        return $this->hasMany('App\Task');
    }
}
