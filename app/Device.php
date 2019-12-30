<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    public function employee_admin()
    {
        return $this->belongsTo('App\Employee', 'admin_id');
    }

    public function employee_user()
    {
        return $this->belongsTo('App\Employee', 'user_id');
    }

    public function transfer()
    {
        return $this->hasMany('App\Transfer');
    }

    public function destruction()
    {
        return $this->hasMany('App\Destruction');
    }
}
