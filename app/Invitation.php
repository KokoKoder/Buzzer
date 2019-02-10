<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Task;

class Invitation extends Model
{
    public function team(){
		return $this->belongsTo(\App\User::class,"team_id");
		
	}
    public function host(){
		return $this->belongsTo(\App\User::class,"host_id");
		
	}
}
