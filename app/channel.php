<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class channel extends Model
{
      protected $fillable = [

    	'title',
    ];


    public function discussions(){

    	return $this->hasMany('App\discussion');

    }

}
