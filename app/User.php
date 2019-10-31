<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function posts(){
        return $this->hasMany('App\Post');
    }
    public function role(){
        return $this->belongsTo('App\Role');
    }
    public function comments(){
        return $this->hasMany('App\Comment');
    }
    public function reports(){
        return $this->hasMany('App\Report');
    }
}
