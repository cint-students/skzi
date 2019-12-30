<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function employees()
    {
        return $this->hasMany('App\Employee');
    }
}
