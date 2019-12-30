<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    public function device()
    {
        return $this->belongsTo('App\Device', 'device_serial_number');
    }
}
