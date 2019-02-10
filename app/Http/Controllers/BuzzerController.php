<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Game;
use App\joinGameRoom;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class BuzzerController extends Controller

{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

	public function createGame(){
		return view('creategame');
	}
	
	public function joinGame(){
		$games=Game::all();
		return view('joingame',compact('games'));
	}
	
	public function teamScreen(){
		$game_id=DB::table('join_game')->where('player_id',Auth::user()->id)->value('game_id');
		$game=DB::table('games')->where('id',$game_id)->value('game_name');
		$user=DB::table('users')->where('id',Auth::user()->id)->value('name');
		
		return view('teamscreen',compact('user','game'));
	}
	
	public function hostview(){
		return view('hostview');
	}
	
	public function store(Request $request){
		$game=new Game;	
		$game->game_name=$request->input('game_name');
		$game->save();
		return redirect()->back();
	}
	
	public function joinGamingRoom(Request $request){
			$join=new joinGameRoom;
			$player_id=Auth::user()->id;
			$join->player_id=$player_id;
			$join->game_id=$request->input('game_id');
			$join->save();
			return redirect()->back();
	}
	
}
