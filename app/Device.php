<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    public function person_admin()
    {
        return $this->belongsTo('App\Person', 'admin_id');
    }

    public function person_user()
    {
        return $this->belongsTo('App\Person', 'user_id');
    }

    public function transfer()
    {
        return $this->hasMany('App\Transfer');
    }

    public function destruction()
    {
        return $this->hasOne('App\Destruction');
    }
}
