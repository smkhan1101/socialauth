<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class discussion extends Model
{
    protected $fillable = [

    	'title', 'content' , 'user_id','channel_id', 'slug'
    ];


      public function user()

    {

        return $this->belongsTo('App\User');

    }

    public function channels(){

    	return $this->belongsTo('App\channel');
    }

    public function replies(){

    	return $this->hasMany('App\reply');
    }
}
