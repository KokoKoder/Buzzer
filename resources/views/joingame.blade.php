@extends('layouts.master')
@section('content')
<div class="row">
				<h1 class="center-align green-text text-darken 4">Join a game</h1>
					<form method="POST" action="{{route('joinGamingRoom')}}" class="center-align col s12">
					  <div class="row">
						<p>Join game</p>
	
							<select name="game_id" type="text" class="browser-default col s6">
							  <option   disabled selected>Join game</option>
								@foreach($games as $game)
								<option value="{{ $game->id}}">{{ $game->game_name}}</option>
								@endforeach
								
							</select>
				
					  </div>
					  <div>
					  @csrf
					  <button type="submit" class="waves-effect waves-light btn " href="">Join game</button>
					  </div>
					</form>
					@php echo Auth::user()->id; @endphp
</div><!-- Close Row-->
@endsection('content')


		  


