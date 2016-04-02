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
<title>Math</title>
<meta charset="utf-8">


</head>

    <body>
        <div id="main-wrapper">
            <!-- Main Header -->
<?php
    include("../config.php");
    include(ROOT."header.php");
?>
            <!-- Main content section -->
            <div id="main-content">
	            <header>
	                <h1>Math</h1>
	            </header>

	            <div class="content">
		
		    <div class ="row1">
			    <div id ="intro">
                    <div id ="imag">
				        <img src="../images/subject_math.jpg" alt="Subject name" width="400" height="200"/>
			        </div>
			        <h2>A place to boost your math grade!</h2>
			        <p><br>Working on math homework now? We can help. Our math tutors are experts at Algebra, Calculus, Matirx, and everything in between.They’ll help with everything math class throws at you. <br><br>Whether you're still learning the basics or mastering more difficult concepts, we're ready to help. Sign up now and it is easy to Boost Your Math Grade.<br><br></p>
			    </div>
		    </div>

		    <div class="row2">
			
			    <a href="../courses/courses_algebra.php">
			    <div id ="c1" class="courses">
			    <h3 id="c1title">Algebra</h3>
			    <p>Algebra is the language through which we describe patterns. As opposed to having to do something over and over again, algebra gives you a simple way to express that repetitive process. It's also seen as a "gatekeeper" subject.</p>
			    </div>
			    </a>
			
			    <a href="../courses/courses_calculus.php">
			    <div id ="c2" class="courses">
			    <h3 id="c2title">Calculus</h3>
			    <p>Calculus is a part of modern mathematics education. A course in calculus is a gateway to other, more advanced courses in mathematics devoted to the study of functions and limits, broadly called mathematical analysis.</p>
			    </div>
			    </a>
			
			    <a href="../courses/courses_matrix.php">
			    <div id ="c3" class="courses">
			    <h3 id="c3title">Matrix</h3>
			    <p>Matrix, a major branch of numerical analysis, is devoted to the development of efficient algorithms for matrix computations, a subject that is centuries old and is today an expanding area of research.</p>
			    </div>
			    </a>
		    </div>
	    </div>
            </div>

            <!-- Main footer -->
<?php
    include("../config.php");
    include(ROOT."footer.php");
?>
    </div>
</body>
</html>
