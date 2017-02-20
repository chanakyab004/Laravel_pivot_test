<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    public function devices()
    {
        return $this->belongsToMany('App\Device', 'user_device','user_id','device_id');
    }
}
