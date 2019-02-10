<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Buzzer App</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style>
    .wrapper {
    min-height:100%;
  }
  .bottom {
    width: 100%;
    height: 250px;
    position: absolute;
    #bottom: 0;
    left: 0;
  }
  </style>
</head>
<body>
<div class="wrapper">
  <div class="container">
	<form id="logout-form" action="{{ route('logout') }}" method="POST" >
		@csrf
		<p>Logged in as <b>{{Auth::user()->name}}</b><button class="waves-effect waves-light btn ">Logout</button></p>
		
	</form>
	<ul class="collapsible">
		<li>
		  <div class="collapsible-header" tabindex="0"><i class="material-icons">person_add</i>Invitation
		  <span class="new badge red">4</span></div>
		  <div class="collapsible-body"><span class="red-text">Buzz MacAllister</span> <a href="">accept</a>  <a href="">deny</a></div>
		  <div class="collapsible-body"><span class="red-text">Aldrin MacAllister</span> <a href="">accept</a>  <a href="">deny</a></div>
		  <div class="collapsible-body"><span class="red-text">Harry Lime</span> <a href="">accept</a>  <a href="">deny</a></div>
		  <div class="collapsible-body"><span class="red-text">Murphy Cooper</span><a href="">accept</a>  <a href="">deny</a></div>
		</li>
	</ul>
	

	<!--Content goes here -->
	@yield('content') <!-- Laravel calling content-->


  </div><!--Closing Container -->

  <footer class="page-footer orange bottom">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="/buzzer/public/">Player lobby</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="/buzzer/public/createGame">Create Game</a></li>
            <li><a class="white-text" href="/buzzer/public/hostview">Host view</a></li>
            <li><a class="white-text" href="/buzzer/public/joinGame">Join Game</a></li>
            <li><a class="white-text" href="/buzzer/public/teamScreen">Team Screen</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>
</div><!--Closing wrapper -->

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
	<script>
	  document.addEventListener('DOMContentLoaded', function() {
		var elems = document.querySelectorAll('.collapsible');
		var options;
		var instances = M.Collapsible.init(elems, options);
	  });
	   document.addEventListener('DOMContentLoaded', function() {
		var elems = document.querySelectorAll('select');
		var options;
		var instances = M.FormSelect.init(elems, options);
	  });
	</script>
  </body>
</html>
