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
	<title>Calculus</title>
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
    include(ROOT."header.php");
?>
        <!-- main content section -->
	    <div id="main-content">	
	        <div class="leftmaincontent">
		
		        <div class="title">
			        <h1>Calculus</h1>
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
			        <p>"He rules. He gives clear explanations to the course materials, goes through a bunch of examples, is very hilarious :), OK Let's Start the Show, One over tiny is HUGE!!. To the prospective undergraduate students, I will highly recommend taking his class!" ~Sam, 1st year university, Vancouver</p>
		        </div>
	        </div>

		
	        <div id="rightmaincontent">
		        <div class="coursedescriptitle">
			        <h3>Learning Outcomes</h3>
		        </div>
			
		        <div class="coursedescrip">
			        <p>Calculus is a part of modern mathematics education. A course in calculus is a gateway to other, more advanced courses in mathematics devoted to the study of functions and limits, broadly called mathematical analysis.</p>
			        <p></p>
			        <p></p>
			        <p></p>
			        <p></p>
		        </div>
			
		        <button type="button" onclick="location.href='http://<?php echo $root; ?>tables/table_math.php'">Book now</button>
	        </div>
        </div>
        <br class="clear">
        <!-- Main Footer -->
<?php
    include("../config.php");
    include(ROOT."footer.php");
?>
	</div>
</body>
</html>
		
		
		
		
		
		
		
