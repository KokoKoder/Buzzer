@extends('layouts.master')
@section('content')

	<div class="row">
		<h1 class="center-align green-text text-darken 4">Create a game room</h1>
			<form method="POST" action="{{route('store')}}" class="col s12">
			
			  <div class="row">
				<p>Create a new game</p>
					<div class="input-field inline col s12">
						<input id="game" name="game_name" type="text" class="validate">
						<label for="game">Game name</label>
					</div>
			  </div>
			  <div>
				<button type="submit" class="waves-effect waves-light btn " href="">Create a new game</button>
				@csrf
			  </div>
			</form>			 
		</div>
	<div class="row">
		<form action="" class="col s12">
		  <div class="row">
			<p>Send invitation to:</p>
				<div class="input-field inline col s12">
					<input id="invite" type="text" class="validate">
					<label for="invite">Enter player/team name</label>
				</div>
		  </div>

		  <div class="input-field col s12">
			<select class="icons">
			  <option value="" disabled selected>Choose from list:</option>
				<option value="1">Myself</option>
				<option value="2">Cooper</option>
				<option value="3">Murphy Cooper</option>
				<label>Materialize Select</label>
			</select>

		  </div>
		  <div>
		  <a class="waves-effect waves-light btn " href="">Send invitation</a>
		  </div>
		</form>
		<br><br><br>


		<form class="col s12">
		  <div class="row">
			<p>Edit game</p>
			  <div class="input-field inline col s12">
				<input id="task" type="text" class="validate">
				<label for="task">Edit game</label>
			</div>
		  </div>
		  <div>
		  <a class="waves-effect waves-light btn " href="">Edit game</a>
		  </div>
		</form>
	</div>
 @endsection('content')