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
	<title>Matirx</title>
	<meta charset="utf-8">
    <link href="../style/base.css" rel="stylesheet" type="text/css">
	<link href="../style/style_courses.css" rel="stylesheet" type="text/css">

        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!--CSS for registeration form-->
    <link href="../style/style_registration.css" rel="stylesheet" type="text/css"/>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Registeration form validation -->
    <script type="text/javascript" src="../js/registeration_Form_script.js"></script>
</head>
	
<body>
    <!-- main wrapper wraps the whole page -->
    <div id="main-wrapper">

<?php
	include("../config.php");
    include(ROOT."header.php");?>

        <!-- main content section -->
	    <div id="main-content">	
	        <div class="leftmaincontent">
		
		        <div class="title">
			        <h1>Matirx</h1>
		        </div>
			
				<div class="imageandrating">
			        <img src="images/KentHuang.JPG" alt="Profile1" height="260" width="200">
		        </div>
			
		        <div class="tutordescrip">
			        <h3>Kent Huang</h3><br>
			        <p>Educational Background:<br><br>PHD of Mathimatics, University of British Columbia</p><br>
			        <p>Experience:<br><br>Kent Huang has tutored mathematics for over 5 years and has taught from kindergarten to university students.</p><br>
			        <p>Motivation:<br><br>Kent Huang loves math, enjoys teaching and really like to motivate students to achieve their educational goals. </p>
				
		        </div>
			
		        <div class="review">
			        <p>Review</p>
			        <p>"Entertaining and engaging lectures with creative analogiescomments. Although he practically teaches from the textbook, his passion distinguishes his lecture." ~Peter, 1st year university, Burnaby</p>
		        </div>
		
		        <div class="imageandrating">
			        <img src="images/KabirCahill.jpg" alt="Profile2" height="260" width="200">
		        </div>
			
		        <div class="tutordescrip">
			        <h3>Kabir Cahill </h3><br>
			        <p>Educational Background:<br><br>BoCS, Simon Fraser University</p><br>
			        <p>Experience:<br><br>Kabir Cahill is a professinal tutor and has tutored a lot of students in both high school and college in math.students he taught are successful in their stuies.</p><br>
			        <p>Motivation:<br><br>To Kabir Cahill, it is so much fun to help students discover how to do the problems and to learn why the process works the way it does. he is enthusiastic working with students and finally help them achieve their personal goals.   </p>

		        </div>
			
		        <div class="review">
			        <p>Review</p>
			        <p>"He's a really really wonderful tutor!!!!!" ~Anonymous</p>
		        </div>
	        </div>

		
	        <div id="rightmaincontent">
		        <div class="coursedescriptitle">
			        <h3>Book lectures to boost your math grade</h3>
		        </div>
			
		        <div class="coursedescrip">
			        <p>Matirx, a major branch of numerical analysis, is devoted to the development of efficient algorithms for matrix computations, a subject that is centuries old and is today an expanding area of research. </p>
			        <p></p>
			        <p></p>
			        <p></p>
			        <p></p>
		        </div>
			
		        <button type="button" onclick="location.href='http://<?php echo $root; ?>tables/table_math.php'">Book now</button>
	        </div>
        </div>

<?php
    include("../config.php");
    include(ROOT."footer.php");
?>
	</div>
</body>
</html>
		
		
		
		
		
		
		
