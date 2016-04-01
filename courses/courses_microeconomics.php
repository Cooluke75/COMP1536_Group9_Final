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
	<title>Microeconomics</title>
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
			        <h1>Microeconomics</h1>
		        </div>
		
		        <div class="imageandrating">
			        <img src="images/LukeLee.jpg" alt="Profile2" height="260" width="200">
		        </div>
			
		        <div class="tutordescrip">
			        <h3>Luke Lee </h3>
			        <p>Educational Background:<br><br>BoC, University of British Columbia</p><br>
			        <p>Experience:<br><br>Senior Coordinator TD</p><br>
			        <p>Motivation:<br><br>"Genius is one percent inspiration, ninety-nine percent perspiration." </p>
			        <p>~Thomas Edison</p>
				
		        </div>
			
		        <div class="review">
			        <p>Review</p><br>
			        <p>"Luke is an excellent lecturer, one of the best Microeconomic professors. I got an A+ because of him, a real gentleman." ~Cindy, first year University, Burnaby</p>
		        </div>

	        </div>

		
	        <div id="rightmaincontent">
		        <div class="coursedescriptitle">
			        <h3>Learning Outcomes</h3>
		        </div>
			
		        <div class="coursedescrip">
				    <p>-Fundamental principles of microeconomics</p>
				    <p>-Supply and demand</p>
				    <p>-Market and walfare</p>
				    <p>-Behavior of the firm</p>
				    <p>-Market organization</p>
			    </div>
			
		        <button type="button" onclick="location.href='http://<?php echo $root; ?>tables/table_economics.php'">Book now</button>
	        </div>
        </div>

<?php
    include("../config.php");
    include(ROOT."footer.php");
?>
	</div>
</body>
</html>
		
		
		
		
		
		
		
