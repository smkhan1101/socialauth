<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reply extends Model
{
    protected $fillable = [

    	'user_id' , 'discussion_id' , 'content',

    ];

    public function user(){

    	return $this->belongsTo('App\User');
    }
    
    public function discussions(){

    	return $this->belongsTo('App\discussion');
    }
    
}
