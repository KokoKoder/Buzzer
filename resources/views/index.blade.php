@extends('layouts.master')
@section('content')
<div class="row">
				<h1 class="center-align green-text text-darken 4">Join a game</h1>
					<form class="center-align col s12">
					  <div class="row">
						<p>Join game</p>
						  <div class="input-field inline col s12">
							<input id="join" type="text" class="validate">
							<label for="join">Enter game name</label>
						</div>
					  </div>
					  <div>
					  <a class="waves-effect waves-light btn " href="">Join game</a>
					  </div>
					</form>
</div><!-- Close Row-->
 @endsection('content')