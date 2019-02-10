<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Game;

class joinGameRoom extends Model
{
    public function player(){
		return $this->belongsTo(\App\User::class,"player_id");
		
	}
    public function host(){
		return $this->belongsTo(\App\User::class,"game_id");
		
	}
	protected $table = 'join_game';
}

