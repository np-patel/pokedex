<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    public $table = 'pokemon';
    public $timestamps = false;

    public function capture(){
    	return $this->hasMany('App\Capture');
    }

    
}
