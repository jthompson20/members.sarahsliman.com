<?php
session_start();

$auth   = (auth())? TRUE: FALSE;

if ( ! $auth):
  header('Location: /login.php');
endif;

$page   = (isset($_REQUEST['pg']))? $_REQUEST['pg']: '';

// custom functions
function auth(){
  return true;
}

function page(){

}

function workouts(){

}

function recipes(){
  return array(
    'Breakfast'     => array(
      array(
        'title'   => 'Egg Fit Muffins',
        'image'   => 'http://placehold.it/640x360',
        'text'    => '
                <p>Serving Size – 3 muffins – 240 cal, 14g fat, 6g carbs, 21g protein</p>
                <p>Ingredients:</p>
                <ul>
                  <li>12 Eggs</li>
                  <li>2 Bell Peppers, Chopped</li>
                  <li>1/2 Cup Chopped Onions</li>
                  <li>2 Cups Chopped Spinich</li>
                  <li>Sea Salt</li>
                  <li>Black Pepper</li>
                  <li>Tumeric (optional)</li>
                </ul>
                <p>Directions:</p>
                <ol>
                  <li>Combine all ingredients in a bowl and whisk together.</li>
                  <li>Using a mini muffin pan, pour the mixture in each muffin tin</li>
                  <li>Makes about 12 muffins</li>
                </ol>'
      ),
      array(
        'title'   => 'Blueberry Protein Smoothie',
        'image'   => 'http://placehold.it/640x360',
        'text'    => ''
      ),
      array(
        'title'   => 'Protein Shake',
        'image'   => 'http://placehold.it/640x360',
        'text'    => ''
      ),
      array(
        'title'   => 'Protein Overnight Oats',
        'image'   => 'http://placehold.it/640x360',
        'text'    => ''
      ),
      array(
        'title'   => 'Protein Greek Yogurt',
        'image'   => 'http://placehold.it/640x360',
        'text'    => ''
      ),
      array(
        'title'   => 'Scrambled Eggs and Veggies',
        'image'   => 'http://placehold.it/640x360',
        'text'    => ''
      ),
      array(
        'title'   => 'Overnight Quinoa Bowl',
        'image'   => 'http://placehold.it/640x360',
        'text'    => ''
      ),
      array(
        'title'   => 'Bacon Asparagus Omelet',
        'image'   => 'http://placehold.it/640x360',
        'text'    => ''
      ),
    ),
    'Lunch-Dinner'  => array(
      array(
        'title'   => 'Sweet Potato Hemp Quinoa Bowl',
        'image'   => 'http://placehold.it/640x360',
        'text'    => ''
      ),
      array(
        'title'   => 'Broccoli & Steak Salad',
        'image'   => 'http://placehold.it/640x360',
        'text'    => ''
      ),
      array(
        'title'   => 'Taco Bowl',
        'image'   => 'http://placehold.it/640x360',
        'text'    => ''
      ),
      array(
        'title'   => 'Grilled Chicken Plate',
        'image'   => 'http://placehold.it/640x360',
        'text'    => ''
      ),
      array(
        'title'   => 'Black Bean Pasta',
        'image'   => 'http://placehold.it/640x360',
        'text'    => ''
      ),
      array(
        'title'   => 'Quinoa Fried Rice',
        'image'   => 'http://placehold.it/640x360',
        'text'    => ''
      ),
      array(
        'title'   => 'Asian Chicken Stir Fry',
        'image'   => 'http://placehold.it/640x360',
        'text'    => ''
      ),
      array(
        'title'   => 'Chicken and Broccoli w/Peanut Sauce',
        'image'   => 'http://placehold.it/640x360',
        'text'    => ''
      ),
    ),
    'Snacks'        => array(
      array(
        'title'   => 'Coconut Milk Protein Yogurt',
        'image'   => 'http://placehold.it/640x360',
        'text'    => ''
      ),
      array(
        'title'   => 'Edamame',
        'image'   => 'http://placehold.it/640x360',
        'text'    => ''
      ),
      array(
        'title'   => 'Almond Milk Protein Shake',
        'image'   => 'http://placehold.it/640x360',
        'text'    => ''
      ),
      array(
        'title'   => 'Apple',
        'image'   => 'http://placehold.it/640x360',
        'text'    => ''
      )
    )
  );
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SarahSliman | Power Group</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>

<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
			MENU
			</button>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">
				Sarah Sliman | Power Group
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">  
			<!--    
			<form class="navbar-form navbar-left" method="GET" role="search">
				<div class="form-group">
					<input type="text" name="q" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
			</form>
			-->
			<ul class="nav navbar-nav navbar-right">
				<li><a href="http://www.pingpong-labs.com" target="_blank">Facebook</a></li>
				<li class="dropdown ">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						Melissa Lombardi
						<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li class="dropdown-header">SETTINGS</li>
							<li class=""><a href="#">Account</a></li>
							<li class=""><a href="#">Billing</a></li>
							<li class="divider"></li>
							<li><a href="#">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>  	<div class="container-fluid main-container">
  		<div class="col-md-2 sidebar">
  			<div class="row">
	<!-- uncomment code for absolute positioning tweek see top comment in css --
	<div class="absolute-wrapper"> </div>-->
	<!-- Menu -->
	<div class="side-menu">
		<nav class="navbar navbar-default" role="navigation">
			<!-- Main Menu -->
			<div class="side-menu-container">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-plane"></span> Recipes</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-user"></span> Workouts</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-cloud"></span> Vlog</a></li>


				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>

	</div>
</div>  		</div>
  		<div class="col-md-10 content">
  			  <div class="panel panel-default">
	<div class="panel-heading">
		Dashboard
	</div>
	<div class="panel-body">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>
</div>
  		</div>
  		<footer class="pull-left footer">
  			<p class="col-md-12">
  				<hr class="divider">
  				Copyright &COPY; 2017 <a href="http://www.sarahsliman.com">Sarah Sliman, LLC</a>
  			</p>
  		</footer>
  	</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<script>
$(function () {
  	$('.navbar-toggle-sidebar').click(function () {
  		$('.navbar-nav').toggleClass('slide-in');
  		$('.side-body').toggleClass('body-slide-in');
  		$('#search').removeClass('in').addClass('collapse').slideUp(200);
  	});

  	$('#search-trigger').click(function () {
  		$('.navbar-nav').removeClass('slide-in');
  		$('.side-body').removeClass('body-slide-in');
  		$('.search-input').focus();
  	});
  });
  </script>

</body>
</html>