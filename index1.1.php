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
	return array(
		array(
			'name' 		=> 'Week 1',
			'workouts'	=> array(
				array(
					'name'			=> 'Jumping Jacks',
					'image'			=> '',
					'audio'			=> '',
					'video'			=> 'https://www.youtube.com/embed/PxV5ogi_5dI',
					'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
					'remember'		=> array(
						'Don\'t lock your knees',
						'Use alternative method if too tough'
					)
				),
				array(
					'name'			=> 'Handstand',
					'image'			=> '',
					'audio'			=> '',
					'video'			=> 'https://www.youtube.com/embed/PxV5ogi_5dI',
					'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
					'remember'		=> array(
						'Don\'t lock your knees',
						'Use alternative method if too tough'
					)
				),
			)
		),
		array(
			'name' 		=> 'Week 2',
			'workouts'	=> array(
				array(
					'name'			=> 'Bicycle Kick',
					'image'			=> '',
					'audio'			=> '',
					'video'			=> 'https://www.youtube.com/embed/PxV5ogi_5dI',
					'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
					'remember'		=> array(
						'Kick it up a notch',
						'Use alternative method if too tough'
					)
				)
			)
		),
	);
}

function recipes(){
  return array(
    'Breakfast'     => array(
      array(
        'title'   => 'Egg Fit Muffins',
        'image'   => 'http://placehold.it/640x360',
        'serving' => '3 muffins – 240 cal, 14g fat, 6g carbs, 21g protein',
        'ingredients'	=> array(
        	'12 Eggs',
        	'2 Bell Peppers, Chopped',
        	'1/2 Cup Chopped Onions',
        	'2 Cups Chopped Spinich',
        	'Sea Salt',
        	'Black Pepper',
        	'Tumeric (optional)'
        ),
        'directions' 	=> array(
        	'Combine all ingredients in a bowl and whisk together',
        	'Using a mini muffin pan, pour the mixture in each muffin tin',
        	'Makes about 12 muffins'
        )
      ),
      array(
        'title'   => 'Blueberry Protein Smoothie',
        'image'   => 'http://placehold.it/640x360',
        'serving' => '3 muffins – 240 cal, 14g fat, 6g carbs, 21g protein',
        'ingredients'	=> array(
        	'12 Eggs',
        	'2 Bell Peppers, Chopped',
        	'1/2 Cup Chopped Onions',
        	'2 Cups Chopped Spinich',
        	'Sea Salt',
        	'Black Pepper',
        	'Tumeric (optional)'
        ),
        'directions' 	=> array(
        	'Combine all ingredients in a bowl and whisk together',
        	'Using a mini muffin pan, pour the mixture in each muffin tin',
        	'Makes about 12 muffins'
        )
      ),
      array(
        'title'   => 'Protein Shake',
        'image'   => 'http://placehold.it/640x360',
        'serving' => '3 muffins – 240 cal, 14g fat, 6g carbs, 21g protein',
        'ingredients'	=> array(
        	'12 Eggs',
        	'2 Bell Peppers, Chopped',
        	'1/2 Cup Chopped Onions',
        	'2 Cups Chopped Spinich',
        	'Sea Salt',
        	'Black Pepper',
        	'Tumeric (optional)'
        ),
        'directions' 	=> array(
        	'Combine all ingredients in a bowl and whisk together',
        	'Using a mini muffin pan, pour the mixture in each muffin tin',
        	'Makes about 12 muffins'
        )
      ),
      array(
        'title'   => 'Protein Overnight Oats',
        'image'   => 'http://placehold.it/640x360',
        'serving' => '3 muffins – 240 cal, 14g fat, 6g carbs, 21g protein',
        'ingredients'	=> array(
        	'12 Eggs',
        	'2 Bell Peppers, Chopped',
        	'1/2 Cup Chopped Onions',
        	'2 Cups Chopped Spinich',
        	'Sea Salt',
        	'Black Pepper',
        	'Tumeric (optional)'
        ),
        'directions' 	=> array(
        	'Combine all ingredients in a bowl and whisk together',
        	'Using a mini muffin pan, pour the mixture in each muffin tin',
        	'Makes about 12 muffins'
        )
      ),
      array(
        'title'   => 'Protein Greek Yogurt',
        'image'   => 'http://placehold.it/640x360',
        'serving' => '3 muffins – 240 cal, 14g fat, 6g carbs, 21g protein',
        'ingredients'	=> array(
        	'12 Eggs',
        	'2 Bell Peppers, Chopped',
        	'1/2 Cup Chopped Onions',
        	'2 Cups Chopped Spinich',
        	'Sea Salt',
        	'Black Pepper',
        	'Tumeric (optional)'
        ),
        'directions' 	=> array(
        	'Combine all ingredients in a bowl and whisk together',
        	'Using a mini muffin pan, pour the mixture in each muffin tin',
        	'Makes about 12 muffins'
        )
      ),
      array(
        'title'   => 'Scrambled Eggs and Veggies',
        'image'   => 'http://placehold.it/640x360',
        'serving' => '3 muffins – 240 cal, 14g fat, 6g carbs, 21g protein',
        'ingredients'	=> array(
        	'12 Eggs',
        	'2 Bell Peppers, Chopped',
        	'1/2 Cup Chopped Onions',
        	'2 Cups Chopped Spinich',
        	'Sea Salt',
        	'Black Pepper',
        	'Tumeric (optional)'
        ),
        'directions' 	=> array(
        	'Combine all ingredients in a bowl and whisk together',
        	'Using a mini muffin pan, pour the mixture in each muffin tin',
        	'Makes about 12 muffins'
        )
      ),
      array(
        'title'   => 'Overnight Quinoa Bowl',
        'image'   => 'http://placehold.it/640x360',
        'serving' => '3 muffins – 240 cal, 14g fat, 6g carbs, 21g protein',
        'ingredients'	=> array(
        	'12 Eggs',
        	'2 Bell Peppers, Chopped',
        	'1/2 Cup Chopped Onions',
        	'2 Cups Chopped Spinich',
        	'Sea Salt',
        	'Black Pepper',
        	'Tumeric (optional)'
        ),
        'directions' 	=> array(
        	'Combine all ingredients in a bowl and whisk together',
        	'Using a mini muffin pan, pour the mixture in each muffin tin',
        	'Makes about 12 muffins'
        )
      ),
      array(
        'title'   => 'Bacon Asparagus Omelet',
        'image'   => 'http://placehold.it/640x360',
        'serving' => '3 muffins – 240 cal, 14g fat, 6g carbs, 21g protein',
        'ingredients'	=> array(
        	'12 Eggs',
        	'2 Bell Peppers, Chopped',
        	'1/2 Cup Chopped Onions',
        	'2 Cups Chopped Spinich',
        	'Sea Salt',
        	'Black Pepper',
        	'Tumeric (optional)'
        ),
        'directions' 	=> array(
        	'Combine all ingredients in a bowl and whisk together',
        	'Using a mini muffin pan, pour the mixture in each muffin tin',
        	'Makes about 12 muffins'
        )
      ),
    ),
    'Lunch-Dinner'  => array(
      array(
        'title'   => 'Sweet Potato Hemp Quinoa Bowl',
        'image'   => 'http://placehold.it/640x360',
        'serving' => '3 muffins – 240 cal, 14g fat, 6g carbs, 21g protein',
        'ingredients'	=> array(
        	'12 Eggs',
        	'2 Bell Peppers, Chopped',
        	'1/2 Cup Chopped Onions',
        	'2 Cups Chopped Spinich',
        	'Sea Salt',
        	'Black Pepper',
        	'Tumeric (optional)'
        ),
        'directions' 	=> array(
        	'Combine all ingredients in a bowl and whisk together',
        	'Using a mini muffin pan, pour the mixture in each muffin tin',
        	'Makes about 12 muffins'
        )
      ),
      array(
        'title'   => 'Broccoli & Steak Salad',
        'image'   => 'http://placehold.it/640x360',
        'serving' => '3 muffins – 240 cal, 14g fat, 6g carbs, 21g protein',
        'ingredients'	=> array(
        	'12 Eggs',
        	'2 Bell Peppers, Chopped',
        	'1/2 Cup Chopped Onions',
        	'2 Cups Chopped Spinich',
        	'Sea Salt',
        	'Black Pepper',
        	'Tumeric (optional)'
        ),
        'directions' 	=> array(
        	'Combine all ingredients in a bowl and whisk together',
        	'Using a mini muffin pan, pour the mixture in each muffin tin',
        	'Makes about 12 muffins'
        )
      ),
      array(
        'title'   => 'Taco Bowl',
        'image'   => 'http://placehold.it/640x360',
        'serving' => '3 muffins – 240 cal, 14g fat, 6g carbs, 21g protein',
        'ingredients'	=> array(
        	'12 Eggs',
        	'2 Bell Peppers, Chopped',
        	'1/2 Cup Chopped Onions',
        	'2 Cups Chopped Spinich',
        	'Sea Salt',
        	'Black Pepper',
        	'Tumeric (optional)'
        ),
        'directions' 	=> array(
        	'Combine all ingredients in a bowl and whisk together',
        	'Using a mini muffin pan, pour the mixture in each muffin tin',
        	'Makes about 12 muffins'
        )
      ),
      array(
        'title'   => 'Grilled Chicken Plate',
        'image'   => 'http://placehold.it/640x360',
        'serving' => '3 muffins – 240 cal, 14g fat, 6g carbs, 21g protein',
        'ingredients'	=> array(
        	'12 Eggs',
        	'2 Bell Peppers, Chopped',
        	'1/2 Cup Chopped Onions',
        	'2 Cups Chopped Spinich',
        	'Sea Salt',
        	'Black Pepper',
        	'Tumeric (optional)'
        ),
        'directions' 	=> array(
        	'Combine all ingredients in a bowl and whisk together',
        	'Using a mini muffin pan, pour the mixture in each muffin tin',
        	'Makes about 12 muffins'
        )
      ),
      array(
        'title'   => 'Black Bean Pasta',
        'image'   => 'http://placehold.it/640x360',
        'serving' => '3 muffins – 240 cal, 14g fat, 6g carbs, 21g protein',
        'ingredients'	=> array(
        	'12 Eggs',
        	'2 Bell Peppers, Chopped',
        	'1/2 Cup Chopped Onions',
        	'2 Cups Chopped Spinich',
        	'Sea Salt',
        	'Black Pepper',
        	'Tumeric (optional)'
        ),
        'directions' 	=> array(
        	'Combine all ingredients in a bowl and whisk together',
        	'Using a mini muffin pan, pour the mixture in each muffin tin',
        	'Makes about 12 muffins'
        )
      ),
      array(
        'title'   => 'Quinoa Fried Rice',
        'image'   => 'http://placehold.it/640x360',
        'serving' => '3 muffins – 240 cal, 14g fat, 6g carbs, 21g protein',
        'ingredients'	=> array(
        	'12 Eggs',
        	'2 Bell Peppers, Chopped',
        	'1/2 Cup Chopped Onions',
        	'2 Cups Chopped Spinich',
        	'Sea Salt',
        	'Black Pepper',
        	'Tumeric (optional)'
        ),
        'directions' 	=> array(
        	'Combine all ingredients in a bowl and whisk together',
        	'Using a mini muffin pan, pour the mixture in each muffin tin',
        	'Makes about 12 muffins'
        )
      ),
      array(
        'title'   => 'Asian Chicken Stir Fry',
        'image'   => 'http://placehold.it/640x360',
        'serving' => '3 muffins – 240 cal, 14g fat, 6g carbs, 21g protein',
        'ingredients'	=> array(
        	'12 Eggs',
        	'2 Bell Peppers, Chopped',
        	'1/2 Cup Chopped Onions',
        	'2 Cups Chopped Spinich',
        	'Sea Salt',
        	'Black Pepper',
        	'Tumeric (optional)'
        ),
        'directions' 	=> array(
        	'Combine all ingredients in a bowl and whisk together',
        	'Using a mini muffin pan, pour the mixture in each muffin tin',
        	'Makes about 12 muffins'
        )
      ),
      array(
        'title'   => 'Chicken and Broccoli w/Peanut Sauce',
        'image'   => 'http://placehold.it/640x360',
        'serving' => '3 muffins – 240 cal, 14g fat, 6g carbs, 21g protein',
        'ingredients'	=> array(
        	'12 Eggs',
        	'2 Bell Peppers, Chopped',
        	'1/2 Cup Chopped Onions',
        	'2 Cups Chopped Spinich',
        	'Sea Salt',
        	'Black Pepper',
        	'Tumeric (optional)'
        ),
        'directions' 	=> array(
        	'Combine all ingredients in a bowl and whisk together',
        	'Using a mini muffin pan, pour the mixture in each muffin tin',
        	'Makes about 12 muffins'
        )
      ),
    ),
    'Snacks'        => array(
      array(
        'title'   => 'Coconut Milk Protein Yogurt',
        'image'   => 'http://placehold.it/640x360',
        'serving' => '3 muffins – 240 cal, 14g fat, 6g carbs, 21g protein',
        'ingredients'	=> array(
        	'12 Eggs',
        	'2 Bell Peppers, Chopped',
        	'1/2 Cup Chopped Onions',
        	'2 Cups Chopped Spinich',
        	'Sea Salt',
        	'Black Pepper',
        	'Tumeric (optional)'
        ),
        'directions' 	=> array(
        	'Combine all ingredients in a bowl and whisk together',
        	'Using a mini muffin pan, pour the mixture in each muffin tin',
        	'Makes about 12 muffins'
        )
      ),
      array(
        'title'   => 'Edamame',
        'image'   => 'http://placehold.it/640x360',
        'serving' => '3 muffins – 240 cal, 14g fat, 6g carbs, 21g protein',
        'ingredients'	=> array(
        	'12 Eggs',
        	'2 Bell Peppers, Chopped',
        	'1/2 Cup Chopped Onions',
        	'2 Cups Chopped Spinich',
        	'Sea Salt',
        	'Black Pepper',
        	'Tumeric (optional)'
        ),
        'directions' 	=> array(
        	'Combine all ingredients in a bowl and whisk together',
        	'Using a mini muffin pan, pour the mixture in each muffin tin',
        	'Makes about 12 muffins'
        )
      ),
      array(
        'title'   => 'Almond Milk Protein Shake',
        'image'   => 'http://placehold.it/640x360',
        'serving' => '3 muffins – 240 cal, 14g fat, 6g carbs, 21g protein',
        'ingredients'	=> array(
        	'12 Eggs',
        	'2 Bell Peppers, Chopped',
        	'1/2 Cup Chopped Onions',
        	'2 Cups Chopped Spinich',
        	'Sea Salt',
        	'Black Pepper',
        	'Tumeric (optional)'
        ),
        'directions' 	=> array(
        	'Combine all ingredients in a bowl and whisk together',
        	'Using a mini muffin pan, pour the mixture in each muffin tin',
        	'Makes about 12 muffins'
        )
      ),
      array(
        'title'   => 'Apple',
        'image'   => 'http://placehold.it/640x360',
        'serving' => '3 muffins – 240 cal, 14g fat, 6g carbs, 21g protein',
        'ingredients'	=> array(
        	'12 Eggs',
        	'2 Bell Peppers, Chopped',
        	'1/2 Cup Chopped Onions',
        	'2 Cups Chopped Spinich',
        	'Sea Salt',
        	'Black Pepper',
        	'Tumeric (optional)'
        ),
        'directions' 	=> array(
        	'Combine all ingredients in a bowl and whisk together',
        	'Using a mini muffin pan, pour the mixture in each muffin tin',
        	'Makes about 12 muffins'
        )
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
  <style>
h1.page-header {
    margin-top: -5px;
}

.sidebar {
	padding-left: 0;
}

.main-container { 
	background: #FFF;
	padding-top: 15px;
	margin-top: -20px;
}

.footer {
	width: 100%;
}  

:focus {
	outline: none;
}

.side-menu {
	position: relative;
	width: 100%;
	height: 100%;
	background-color: #f8f8f8;
	border-right: 1px solid #e7e7e7;
}
.side-menu .navbar {
	border: none;
}
.side-menu .navbar-header {
	width: 100%;
	border-bottom: 1px solid #e7e7e7;
}
.side-menu .navbar-nav .active a {
	background-color: transparent;
	margin-right: -1px;
	border-right: 5px solid #e7e7e7;
}
.side-menu .navbar-nav li {
	display: block;
	width: 100%;
	border-bottom: 1px solid #e7e7e7;
}
.side-menu .navbar-nav li a {
	padding: 15px;
}
.side-menu .navbar-nav li a .glyphicon {
	padding-right: 10px;
}
.side-menu #dropdown {
	border: 0;
	margin-bottom: 0;
	border-radius: 0;
	background-color: transparent;
	box-shadow: none;
}
.side-menu #dropdown .caret {
	float: right;
	margin: 9px 5px 0;
}
.side-menu #dropdown .indicator {
	float: right;
}
.side-menu #dropdown > a {
	border-bottom: 1px solid #e7e7e7;
}
.side-menu #dropdown .panel-body {
	padding: 0;
	background-color: #f3f3f3;
}
.side-menu #dropdown .panel-body .navbar-nav {
	width: 100%;
}
.side-menu #dropdown .panel-body .navbar-nav li {
	padding-left: 15px;
	border-bottom: 1px solid #e7e7e7;
}
.side-menu #dropdown .panel-body .navbar-nav li:last-child {
	border-bottom: none;
}
.side-menu #dropdown .panel-body .panel > a {
	margin-left: -20px;
	padding-left: 35px;
}
.side-menu #dropdown .panel-body .panel-body {
	margin-left: -15px;
}
.side-menu #dropdown .panel-body .panel-body li {
	padding-left: 30px;
}
.side-menu #dropdown .panel-body .panel-body li:last-child {
	border-bottom: 1px solid #e7e7e7;
}
.side-menu #search-trigger {
	background-color: #f3f3f3;
	border: 0;
	border-radius: 0;
	position: absolute;
	top: 0;
	right: 0;
	padding: 15px 18px;
}
.side-menu .brand-name-wrapper {
	min-height: 50px;
}
.side-menu .brand-name-wrapper .navbar-brand {
	display: block;
}
.side-menu #search {
	position: relative;
	z-index: 1000;
}
.side-menu #search .panel-body {
	padding: 0;
}
.side-menu #search .panel-body .navbar-form {
	padding: 0;
	padding-right: 50px;
	width: 100%;
	margin: 0;
	position: relative;
	border-top: 1px solid #e7e7e7;
}
.side-menu #search .panel-body .navbar-form .form-group {
	width: 100%;
	position: relative;
}
.side-menu #search .panel-body .navbar-form input {
	border: 0;
	border-radius: 0;
	box-shadow: none;
	width: 100%;
	height: 50px;
}
.side-menu #search .panel-body .navbar-form .btn {
	position: absolute;
	right: 0;
	top: 0;
	border: 0;
	border-radius: 0;
	background-color: #f3f3f3;
	padding: 15px 18px;
}
/* Main body section */
.side-body {
	margin-left: 310px;
}
/* small screen */
@media (max-width: 768px) {
	.side-menu {
		position: relative;
		width: 100%;
		height: 0;
		border-right: 0;
	}

	.side-menu .navbar {
		z-index: 999;
		position: relative;
		height: 0;
		min-height: 0;
		background-color:none !important;
		border-color: none !important;
	}
	.side-menu .brand-name-wrapper .navbar-brand {
		display: inline-block;
	}
	/* Slide in animation */
	@-moz-keyframes slidein {
		0% {
			left: -300px;
		}
		100% {
			left: 10px;
		}
	}
	@-webkit-keyframes slidein {
		0% {
			left: -300px;
		}
		100% {
			left: 10px;
		}
	}
	@keyframes slidein {
		0% {
			left: -300px;
		}
		100% {
			left: 10px;
		}
	}
	@-moz-keyframes slideout {
		0% {
			left: 0;
		}
		100% {
			left: -300px;
		}
	}
	@-webkit-keyframes slideout {
		0% {
			left: 0;
		}
		100% {
			left: -300px;
		}
	}
	@keyframes slideout {
		0% {
			left: 0;
		}
		100% {
			left: -300px;
		}
	}
	/* Slide side menu*/
	/* Add .absolute-wrapper.slide-in for scrollable menu -> see top comment */
	.side-menu-container > .navbar-nav.slide-in {
		-moz-animation: slidein 300ms forwards;
		-o-animation: slidein 300ms forwards;
		-webkit-animation: slidein 300ms forwards;
		animation: slidein 300ms forwards;
		-webkit-transform-style: preserve-3d;
		transform-style: preserve-3d;
	}
	.side-menu-container > .navbar-nav {
		/* Add position:absolute for scrollable menu -> see top comment */
		position: fixed;
		left: -300px;
		width: 300px;
		top: 43px;
		height: 100%;
		border-right: 1px solid #e7e7e7;
		background-color: #f8f8f8;
		overflow: auto;
		-moz-animation: slideout 300ms forwards;
		-o-animation: slideout 300ms forwards;
		-webkit-animation: slideout 300ms forwards;
		animation: slideout 300ms forwards;
		-webkit-transform-style: preserve-3d;
		transform-style: preserve-3d;
	}
	@-moz-keyframes bodyslidein {
		0% {
			left: 0;
		}
		100% {
			left: 300px;
		}
	}
	@-webkit-keyframes bodyslidein {
		0% {
			left: 0;
		}
		100% {
			left: 300px;
		}
	}
	@keyframes bodyslidein {
		0% {
			left: 0;
		}
		100% {
			left: 300px;
		}
	}
	@-moz-keyframes bodyslideout {
		0% {
			left: 300px;
		}
		100% {
			left: 0;
		}
	}
	@-webkit-keyframes bodyslideout {
		0% {
			left: 300px;
		}
		100% {
			left: 0;
		}
	}
	@keyframes bodyslideout {
		0% {
			left: 300px;
		}
		100% {
			left: 0;
		}
	}
	/* Slide side body*/
	.side-body {
		margin-left: 5px;
		margin-top: 70px;
		position: relative;
		-moz-animation: bodyslideout 300ms forwards;
		-o-animation: bodyslideout 300ms forwards;
		-webkit-animation: bodyslideout 300ms forwards;
		animation: bodyslideout 300ms forwards;
		-webkit-transform-style: preserve-3d;
		transform-style: preserve-3d;
	}
	.body-slide-in {
		-moz-animation: bodyslidein 300ms forwards;
		-o-animation: bodyslidein 300ms forwards;
		-webkit-animation: bodyslidein 300ms forwards;
		animation: bodyslidein 300ms forwards;
		-webkit-transform-style: preserve-3d;
		transform-style: preserve-3d;
	}
	/* Hamburger */
	.navbar-toggle-sidebar {
		border: 0;
		float: left;
		padding: 18px;
		margin: 0;
		border-radius: 0;
		background-color: #f3f3f3;
	}
	/* Search */
	#search .panel-body .navbar-form {
		border-bottom: 0;
	}
	#search .panel-body .navbar-form .form-group {
		margin: 0;
	}
	.side-menu .navbar-header {
		/* this is probably redundant */
		position: fixed;
		z-index: 3;
		background-color: #f8f8f8;
	}
	/* Dropdown tweek */
	#dropdown .panel-body .navbar-nav {
		margin: 0;
	}
}
  </style>
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
				<li class="dropdown ">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						Melissa Lombardi
						<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li class="dropdown-header">SETTINGS</li>
							<li class=""><a href="#">Account</a></li>
							<li class=""><a href="#">Billing</a></li>
							<li class="divider"></li>
							<li><a href="/logout.php">Logout</a></li>
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
					<li class="active"><a href="<?php echo $_SERVER['PHP_SELF']; ?>"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
					<li><a href="https://www.facebook.com/groups/1442018715889142/" target="_blank"><span class="glyphicon glyphicon-user"></span> Facebook Group</a></li>
					<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?pg=recipes"><span class="glyphicon glyphicon-apple"></span> Personal Recipes</a></li>
					<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?pg=workouts"><span class="glyphicon glyphicon-play"></span> Power Group Workouts</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-facetime-video"></span> Sarah's Vlog <small>(NEW)</small></a></li>


				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>

	</div>
</div>  		</div>
  		


		<?php if ($page === ''){ ?>

			<div class="col-md-10 content">
				<div class="panel panel-default">
					<div class="panel-heading">
						Sarah Sliman | Power Group
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

		<?php } elseif ($page === 'recipes') { ?>

			<?php 
			// grab recipes
			$recipes  = recipes();
			?>

			<style>

.panel.with-nav-tabs .panel-heading{
    padding: 5px 5px 0 5px;
}
.panel.with-nav-tabs .nav-tabs{
	border-bottom: none;
}
.panel.with-nav-tabs .nav-justified{
	margin-bottom: -1px;
}
/********************************************************************/
/*** PANEL DEFAULT ***/
.with-nav-tabs.panel-default .nav-tabs > li > a,
.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
    color: #777;
}
.with-nav-tabs.panel-default .nav-tabs > .open > a,
.with-nav-tabs.panel-default .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-default .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
    color: #777;
	background-color: #ddd;
	border-color: transparent;
}
.with-nav-tabs.panel-default .nav-tabs > li.active > a,
.with-nav-tabs.panel-default .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.active > a:focus {
	color: #555;
	background-color: #fff;
	border-color: #ddd;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #f5f5f5;
    border-color: #ddd;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #777;   
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #ddd;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #555;
}
/********************************************************************/
/*** PANEL PRIMARY ***/
.with-nav-tabs.panel-primary .nav-tabs > li > a,
.with-nav-tabs.panel-primary .nav-tabs > li > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li > a:focus {
    color: #fff;
}
.with-nav-tabs.panel-primary .nav-tabs > .open > a,
.with-nav-tabs.panel-primary .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-primary .nav-tabs > li > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li > a:focus {
	color: #fff;
	background-color: #3071a9;
	border-color: transparent;
}
.with-nav-tabs.panel-primary .nav-tabs > li.active > a,
.with-nav-tabs.panel-primary .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li.active > a:focus {
	color: #428bca;
	background-color: #fff;
	border-color: #428bca;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #428bca;
    border-color: #3071a9;
}
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #fff;   
}
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #3071a9;
}
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    background-color: #4a9fe9;
}
/********************************************************************/
/*** PANEL SUCCESS ***/
.with-nav-tabs.panel-success .nav-tabs > li > a,
.with-nav-tabs.panel-success .nav-tabs > li > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li > a:focus {
	color: #3c763d;
}
.with-nav-tabs.panel-success .nav-tabs > .open > a,
.with-nav-tabs.panel-success .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-success .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-success .nav-tabs > li > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li > a:focus {
	color: #3c763d;
	background-color: #d6e9c6;
	border-color: transparent;
}
.with-nav-tabs.panel-success .nav-tabs > li.active > a,
.with-nav-tabs.panel-success .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li.active > a:focus {
	color: #3c763d;
	background-color: #fff;
	border-color: #d6e9c6;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #dff0d8;
    border-color: #d6e9c6;
}
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #3c763d;   
}
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #d6e9c6;
}
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #3c763d;
}
/********************************************************************/
/*** PANEL INFO ***/
.with-nav-tabs.panel-info .nav-tabs > li > a,
.with-nav-tabs.panel-info .nav-tabs > li > a:hover,
.with-nav-tabs.panel-info .nav-tabs > li > a:focus {
	color: #31708f;
}
.with-nav-tabs.panel-info .nav-tabs > .open > a,
.with-nav-tabs.panel-info .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-info .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-info .nav-tabs > li > a:hover,
.with-nav-tabs.panel-info .nav-tabs > li > a:focus {
	color: #31708f;
	background-color: #bce8f1;
	border-color: transparent;
}
.with-nav-tabs.panel-info .nav-tabs > li.active > a,
.with-nav-tabs.panel-info .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-info .nav-tabs > li.active > a:focus {
	color: #31708f;
	background-color: #fff;
	border-color: #bce8f1;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #d9edf7;
    border-color: #bce8f1;
}
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #31708f;   
}
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #bce8f1;
}
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #31708f;
}
/********************************************************************/
/*** PANEL WARNING ***/
.with-nav-tabs.panel-warning .nav-tabs > li > a,
.with-nav-tabs.panel-warning .nav-tabs > li > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > li > a:focus {
	color: #8a6d3b;
}
.with-nav-tabs.panel-warning .nav-tabs > .open > a,
.with-nav-tabs.panel-warning .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-warning .nav-tabs > li > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > li > a:focus {
	color: #8a6d3b;
	background-color: #faebcc;
	border-color: transparent;
}
.with-nav-tabs.panel-warning .nav-tabs > li.active > a,
.with-nav-tabs.panel-warning .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > li.active > a:focus {
	color: #8a6d3b;
	background-color: #fff;
	border-color: #faebcc;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #fcf8e3;
    border-color: #faebcc;
}
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #8a6d3b; 
}
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #faebcc;
}
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #8a6d3b;
}
/********************************************************************/
/*** PANEL DANGER ***/
.with-nav-tabs.panel-danger .nav-tabs > li > a,
.with-nav-tabs.panel-danger .nav-tabs > li > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > li > a:focus {
	color: #a94442;
}
.with-nav-tabs.panel-danger .nav-tabs > .open > a,
.with-nav-tabs.panel-danger .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-danger .nav-tabs > li > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > li > a:focus {
	color: #a94442;
	background-color: #ebccd1;
	border-color: transparent;
}
.with-nav-tabs.panel-danger .nav-tabs > li.active > a,
.with-nav-tabs.panel-danger .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > li.active > a:focus {
	color: #a94442;
	background-color: #fff;
	border-color: #ebccd1;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #f2dede; /* bg color */
    border-color: #ebccd1; /* border color */
}
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #a94442; /* normal text color */  
}
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #ebccd1; /* hover bg color */
}
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff; /* active text color */
    background-color: #a94442; /* active bg color */
}
		</style>

		    <div class="row">
		    	<div class="col-md-8">
		            <div class="panel with-nav-tabs panel-default">
		                <div class="panel-heading">
	                        <ul class="nav nav-tabs">
		                        <?php foreach ($recipes AS $key => $value): ?>
		                        	<?php $active 	= ($key === 'Breakfast')? 'active': ''; ?>
		                            <li class="<?php echo $active; ?>"><a href="#tab-<?php echo $key; ?>" data-toggle="tab"><?php echo $key; ?></a></li>
		                        <?php endforeach; ?>
	                        </ul>
		                </div>
		                <div class="panel-body">
		                    <div class="tab-content">

		                        <?php foreach ($recipes AS $key => $value): ?>

		                        	<div class="tab-pane fade in active" id="tab-<?php echo $key; ?>">

		                        		<?php foreach ($value AS $keys => $recipe): ?>

											<div class="col-xs-12 content">
												<div class="panel panel-default">
													<div class="panel-heading">
														<strong style="padding:10px;"><?php echo $recipe['title']; ?></strong>
													</div>
													<div class="panel-body">
														<div class="row">
															<div class="col-xs-12 col-sm-6">
																<img src="<?php echo $recipe['image']; ?>" class="img-responsive" />
															</div>
															<div class="col-xs-12 col-sm-6">
																<p>Serving Size:<br/><?php echo $recipe['serving']; ?></p>
																<p>Ingredients:</p>
																<ul>
																<?php foreach ($recipe['ingredients'] AS $ingredient): ?>
																	<li><?php echo $ingredient; ?></li>
																<?php endforeach; ?>
																</ul>
															</div>
															<div class="col-xs-12">
															<p>Directions:</p>
																<ol>
																<?php foreach ($recipe['directions'] AS $direction): ?>
																	<li><?php echo $direction; ?></li>
																<?php endforeach; ?>
																</ol>
															</div>
														</div>
													</div>
												</div>
											</div>

		                        		<?php endforeach; ?>


		                        	</div>

		                        <?php endforeach; ?>

		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>

		<?php } elseif ($page === 'workouts') { ?>

			<?php $workouts = workouts(); ?>

		    <div class="row">
		    	<div class="col-md-8">
		            <div class="panel with-nav-tabs panel-default">
		                <div class="panel-heading">
	                        <ul class="nav nav-tabs">
		                        <?php 
								$cnt=0;
		                        foreach ($workouts AS $key => $value): ?>
		                        	<?php $active 	= ($cnt === 0)? 'active': ''; $cnt++; ?>
		                            <li class="<?php echo $active; ?>"><a href="#tab-workout-week-<?php echo $key; ?>" data-toggle="tab"><?php echo $value['name']; ?></a></li>
		                        <?php endforeach; ?>
	                        </ul>
		                </div>
		                <div class="panel-body">
		                    <div class="tab-content">
		                        <?php foreach ($workouts AS $key => $value): ?>

		                        	<div class="tab-pane fade in active" id="tab-workout-week-<?php echo $key; ?>">

			                        	<?php foreach ($value['workouts'] AS $workout): ?>

											<div class="col-xs-12 content">
												<div class="panel panel-default">
													<div class="panel-heading">
														<strong style="padding:10px;"><?php echo $workout['name']; ?></strong>
													</div>
													<div class="panel-body">
														<div class="row">
															<div class="col-xs-12 col-sm-6">
															<iframe width="853" height="480" src="<?php echo $workout['video']; ?>" frameborder="0" allowfullscreen></iframe>
															</div>
															<div class="col-xs-12 col-sm-6">
																<?php echo $workout['description']; ?>
															</div>
														</div>
													</div>
												</div>
											</div>

										<?php endforeach; ?>

									</div>

								<?php endforeach; ?>

							</div>

						</div>

					</div>

				</div>

			</div>

		<?php } else { ?>

			<div class="col-md-10 content">
				<div class="panel panel-default">
					<div class="panel-heading">
						Not Found
					</div>
					<div class="panel-body">
						The page that you're looking for does not exist.  <a href="<?php echo $_SERVER['PHP_SELF']; ?>">Click here to return to the Dashboard.</a>
					</div>
				</div>
			</div>

		<?php } ?>





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