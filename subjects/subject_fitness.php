<?php
  include 'functions.php';
  require_once('config.php');
  session_start();
  // Connect to server and select database.
  mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect, error: ".mysql_error());
  mysql_select_db(DB_DATABASE)or die("cannot select DB, error: ".mysql_error());
  $tbl_name="topic"; // Table name
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="../style/base.css" rel="stylesheet" type="text/css">
        <link href="../style/style_subject.css" rel="stylesheet" type="text/css">
        <!--CSS for registeration form-->
        <link href="../style/style_registration.css" rel="stylesheet" type="text/css"/>


        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!-- Registeration form validation -->
        <script type="text/javascript" src="../js/registeration_Form_script.js"></script>
<title>Fitness</title>
<meta charset="utf-8">


</head>

    <body>
        <div id="main-wrapper">
			<!-- Main Header -->
<?php
    include("../config.php");
    include(ROOT."header.php");
?>

	    <header>
	        <h1>Fitness</h1>
	    </header>

	    <div class="content">
		
		    <div class ="row1">
			    <div id ="imag">
				    <img src="images/subject_fitness.jpg" alt="Subject name" width="400" height="200"/>
			    </div>
			
			    <div id ="intro">
			    <h2>The road to being the most fit you’ve ever been starts here</h2>
			    <p><br>Here at A+ Academy, not only do we look to improve your mental strength, but also your physical strength. With options like sports, weight training and dance you have a variety of ways to get the healthy physique you deserve.  <br><br>Through the internet we can help you achieve your fitness goals at a time suitable to your schedule. We’re dedicated to developing the most effective training programs just for you and we strive to help you become the fittest you can be! <br><br></p>
			    
			    </div>
		    </div>

		    <div class="row2">
			
			    <a href="../courses/courses_sports.php">
			    <div id ="c1" class="courses">
			    <h3 id="c1title">Sports</h3>
			    <p>From basketball to badminton to football, our experts offer training advice on how to improve your game as well as in-depth analysis to possible flaws in your performance.</p>
			    </div>
			    </a>
			
			    <a href="../courses/courses_weight_training.php">
			    <div id ="c2" class="courses">
			    <h3 id="c2title">Weight Training</h3>
			    <p>Build lean, ripped athletic muscle with our certified coaches who provide some of the best training out there. From building serious muscle to getting that six pack you’ve always wanted. We are here to help.</p>
			    </div>
			    </a>
			
			    <a href="../courses/courses_dance.php">
			    <div id ="c3" class="courses">
			    <h3 id="c3title">Dance</h3>
			    <p>Want to get fit in a fun and exciting way? We offer lessons on Zumba for fitness or Ballet for the more technical aspect of dance. Our Instructors will make sure to give you the best you can get from exercising with dance.</p>
			    </div>
			    </a>
		    </div>
	    </div>

	    <!-- Main Footer -->
<?php
    include("../config.php");
    include(ROOT."footer.php");
?>
    </div>
</body>
</html>
