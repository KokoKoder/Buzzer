@extends('layouts.master')
@section('content')
	
		<div class="row">
		<h1 class="center-align green-text text-darken 4">Game Dashboard</h1>
			<div class="center-align col s6">
				<h2>Team 1</h2>
				  <div class="row">
					<div class="col s12 m8 offset-m2 ">
					  <div class="card-panel orange">
					  <div class="row valign-wrapper flow-text">
						<div class="col s6 ">
							<div class="valign-wrapper">
								<span class="white-text ">SCORE: 4
								</span>
							</div>
						</div>
						<div class="col s6">
								<a href="" class="btn-small" ><i class="material-icons">expand_less</i></a>
								<a href="" class="btn-small" ><i class="material-icons">expand_more</i></a>
						</div>
						</div>
					  </div>
					</div>
				 </div>
				 Buzzed :
				 <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">notifications_active</i><i style="display:none " class="material-icons black">notifications_off</i></a>
			</div>
			<div class="center-align col s6">
				<h2>Team 2</h2>
				 
				  <div class="row">
					<div class="col s12 m8 offset-m2 ">
					  <div class="card-panel teal">
						<div class="row valign-wrapper flow-text">
						<div class="col s6 ">
							<div class="valign-wrapper">
								<span class="white-text ">SCORE: 4
								</span>
							</div>
						</div>
						<div class="col s6">
								<a href="" class="btn-small" ><i class="material-icons">expand_less</i></a>
								<a href="" class="btn-small" ><i class="material-icons">expand_more</i></a>
						</div>
						</div>
					  </div>
					  </div>
					</div>
					Buzzed :
					<a class="btn-floating btn-large waves-effect waves-light blue" ><i class="material-icons" style="display:none ">notifications_active</i><i style="display:block " class="material-icons black">notifications_off</i></a>
		
			</div>				 
		</div>
	  


	  
	  <div class="row">
		<form class="col s12">
		  <div class="row">
			<p>Create a new task</p>
			  <div class="input-field inline col s12">
				<input id="task" type="text" class="validate">
				<label for="task">New task</label>
			</div>
		  </div>

		  <div class="input-field col s12">
			<select class="icons">
			  <option value="" disabled selected>Asssign to:</option>
				<option value="1">Myself</option>
				<option value="2">Cooper</option>
				<option value="3">Murphy Cooper</option>
				<label>Materialize Select</label>
			</select>

		  </div>
		  <div>
		  <a class="waves-effect waves-light btn " href="">Add new task</a>
		  </div>
		</form>

	
  	
      <ul class="collection with-header">
        <li class="collection-header"><h4>First Names</h4></li>
        <li class="collection-item"><div>Alvin<a href="" class="secondary-content">delete</a></div></li>
        <li class="collection-item"><div>Alvin<a href="" class="secondary-content">delete</a></div></li>
        <li class="collection-item"><div>Alvin<a href="" class="secondary-content">delete</a></div></li>
        <li class="collection-item"><div>Alvin<a href="" class="secondary-content">delete</a></div></li>
      </ul>
	  
	  	<form class="col s12">
		  <div class="row">
			<p>Edit task</p>
			  <div class="input-field inline col s12">
				<input id="task" type="text" class="validate">
				<label for="task">Edit task</label>
			</div>
		  </div>
		  <div>
		  <a class="waves-effect waves-light btn " href="">Edit task</a>
		  </div>
		</form>

  </div><!-- Close Row-->
 @endsection('content')
