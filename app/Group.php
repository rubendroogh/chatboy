<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function users()
    {
    	return $this->belongsToMany('App\User', 'group_users');
    }

    public function messages()
    {
    	return $this->hasMany('App\Message');
    }
}