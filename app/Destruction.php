<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destruction extends Model
{
    public function device()
    {
        return $this->belongsTo('App\Device', 'device_id');
    }
}
