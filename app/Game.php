<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
	{
    public function user(){
	
		return $this->hasMany(\App\User::class);
	}
}