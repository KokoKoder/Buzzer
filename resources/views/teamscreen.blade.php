@extends('layouts.master')
@section('content')
		<div class="row">
			<h1 class="center-align green-text text-darken 4">{{$game}}</h1>
			<div class="center-align col s12">
				<div class="row valign-wrapper">
					<div class="col s6 ">
					<h2>{{$user}}</h2>
					</div>
					<div class="col s6">
						<span >@php echo 'SCORE: 4'; @endphp</span>
					</div>
				</div>
				<div class="row">
					<div class="col s12 m8 offset-m2 ">
						<a class="btn-floating btn-large waves-effect waves-light blue" ><i class="material-icons" style="display:block ">notifications_active</i><i style="display:none " class="material-icons black">notifications_off</i></a>
					</div>
				</div>
					Buzzed :
					<span><i  class="material-icons ">check</i></span>
		
			</div>		
		</div><!-- Close Row-->
 @endsection('content')