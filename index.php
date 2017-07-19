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
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <style>
    .video-container {
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 30px; height: 0; overflow: hidden;
    }
     
    .video-container iframe,
    .video-container object,
    .video-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    }
    .box-body .row {
      padding-top:15px;
    }
    .box-title:hover {
      cursor:   hand;
      cursor:pointer;
    }
    .gray-bg {
      background-color: #eee;
    }
  </style>

</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="/" class="navbar-brand"><b>Sarah</b>Sliman</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            
            <!--
            <li class="dropdown" class="active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Workouts <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">August</a></li>
                <li><a href="#">July</a></li>
                <li><a href="#">June</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            -->
            <li><a href="/?pg=recipes">Recipes </a></li>
            <li><a href="/">Workouts </a></li>
            <li><a href="http://www.sarahsliman.com">Vlog </a></li>
          </ul>
          <!--
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
            </div>
          </form>
          -->
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">Melissa Lombardi</span>
              </a>
              <ul class="dropdown-menu">
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  
  <?php if ($page === ''){ ?>

  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Power Group | Workouts
          <small><?php echo date('F Y'); ?></small>
        </h1>
        <!--
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active"><a href="#">Nutrition</a></li>
        </ol>
        -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="callout callout-info facebook-connect" style="min-height:100px;">
          <h4>Connect on Facebook</h4>

          <p><img style="max-width: 50px;float: left;margin-right: 10px;max-height: 50px;" src="https://facebookbrand.com/wp-content/themes/fb-branding/prj-fb-branding/assets/images/fb-art.png" class="img-responsive pull left" /> Be sure to check-in with our Facebook group for tips, encouragement and motivation from the entire Power Group! </p>
        </div>
        <!--
        <div class="callout callout-danger">
          <h4>Warning!</h4>

          <p>The construction of this layout differs from the normal one. In other words, the HTML markup of the navbar
            and the content will slightly differ than that of the normal layout.</p>
        </div>
        -->
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title" data-control="week3">July Power Group - Week 3</h3>
          </div>
          <div class="box-body week3">
              
            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <div class="video-container">
                  <iframe width="853" height="480" src="https://www.youtube.com/embed/PxV5ogi_5dI" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6">
                <h2>Week 3 - Day 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                <ul>
                  <li>Keep your elbows tight</li>
                  <li>bend at the hips</li>
                  <li>something else</li>
                </ul>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <div class="video-container">
                  <iframe width="853" height="480" src="https://www.youtube.com/embed/PxV5ogi_5dI" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6">
                <h2>Week 3 - Day 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <div class="video-container">
                  <iframe width="853" height="480" src="https://www.youtube.com/embed/PxV5ogi_5dI" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6">
                <h2>Week 3 - Day 3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              </div>
            </div>

          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->


        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title" data-control="week2">July Power Group - Week 2</h3>
          </div>
          <div class="box-body week2">
              
            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <div class="video-container">
                  <iframe width="853" height="480" src="https://www.youtube.com/embed/PxV5ogi_5dI" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6">
                <h2>Week 2 - Day 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                <ul>
                  <li>Keep your elbows tight</li>
                  <li>bend at the hips</li>
                  <li>something else</li>
                </ul>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <div class="video-container">
                  <iframe width="853" height="480" src="https://www.youtube.com/embed/PxV5ogi_5dI" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6">
                <h2>Week 2 - Day 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <div class="video-container">
                  <iframe width="853" height="480" src="https://www.youtube.com/embed/PxV5ogi_5dI" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6">
                <h2>Week 2 - Day 3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              </div>
            </div>

          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->




        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title" data-control="week1">July Power Group - Week 1</h3>
          </div>
          <div class="box-body week1">
              
            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <div class="video-container">
                  <iframe width="853" height="480" src="https://www.youtube.com/embed/PxV5ogi_5dI" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6">
                <h2>Week 1 - Day 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                <ul>
                  <li>Keep your elbows tight</li>
                  <li>bend at the hips</li>
                  <li>something else</li>
                </ul>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <div class="video-container">
                  <iframe width="853" height="480" src="https://www.youtube.com/embed/PxV5ogi_5dI" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6">
                <h2>Week 1 - Day 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <div class="video-container">
                  <iframe width="853" height="480" src="https://www.youtube.com/embed/PxV5ogi_5dI" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6">
                <h2>Week 1 - Day 3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              </div>
            </div>

          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->





      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->

  <?php } else if ($page === 'recipes'){ ?>

  <?php $recipes  = recipes(); ?>

  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Power Group | Recipes
          <small><?php echo date('F Y'); ?></small>
        </h1>
        <!--
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active"><a href="#">Nutrition</a></li>
        </ol>
        -->
      </section>

      <!-- Main content -->
      <section class="content">

          <?php
          foreach ($recipes AS $key => $value):
          ?>

        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title" data-control="<?php echo strtolower($key); ?>"><?php echo $key; ?></h3>
          </div>
          <div class="box-body <?php echo strtolower($key); ?>">

          <?php foreach ($value AS $keys => $recipe): ?>

            <?php if ($keys % 2 === 0): ?>

            <div class="row gray-bg">
              <div class="col-xs-12 col-sm-6" style="padding-left:50px;">
                <h2><?php echo $recipe['title']; ?></h2>
                <?php echo $recipe['text']; ?>
              </div>
              <div class="col-xs-12 col-sm-6">
                <div class="video-container">
                  <img src="<?php echo $recipe['image']; ?>" class="img-responsive" />
                </div>
              </div>
            </div>

          <?php else: ?>

            <div class="row">
              <div class="col-xs-12 col-sm-6" style="padding-left:50px;">
                <div class="video-container">
                  <img src="<?php echo $recipe['image']; ?>" class="img-responsive" />
                </div>
              </div>
              <div class="col-xs-12 col-sm-6">
                <h2><?php echo $recipe['title']; ?></h2>
                <?php echo $recipe['text']; ?>
              </div>
            </div>

          <?php endif; ?>

          <?php endforeach; ?>


          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

      <?php endforeach; ?>

      </section>

    </div>

  </div>


  <?php } ?>



  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.1
      </div>
      <strong>&copy; 2017 <a href="#">SarahSliman, LLC</a></strong>
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script>

$(document).ready(function(){

  // close all accordians
  var first   = true;
  $('.box-title').each(function(){
    // don't close the first one
    if (first){
      first   = false;
      //return true;
    }
    var attr  = $(this).data('control');
    $('.' + attr).hide();

  });

  $('.box-title').on('click',function(){
    var attr  = $(this).data('control');
    $('.' + attr).toggle();
  });

  $('.facebook-connect').on('click',function(){
    window.location   = "https://www.facebook.com/groups/1442018715889142/";
  });


});

</script>


</body>
</html>
