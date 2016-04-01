<?php
  include '../functions.php';
  require_once('../config.php');
  session_start();
  // Connect to server and select database.
  mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect, error: ".mysql_error());
  mysql_select_db(DB_DATABASE)or die("cannot select DB, error: ".mysql_error());
  $tbl_name="topic"; // Table name
?>
<!DOCTYPE html>
<html lang="en">
<head> 
	<title>Sports</title>
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
        <!-- Main Header -->
<?php
	include("../config.php");
    include(ROOT."header.php");
?>

        <!-- main content section -->
	    <div id="main-content">	
	        <div class="leftmaincontent">
		
		        <div class="title">
			        <h1>Sports</h1>
		        </div>
			
		        <div class="imageandrating">
			        <img src="images/KentHuang.JPG" alt="Profile1" height="260" width="200">
		        </div>
			
		        <div class="tutordescrip">
			        <h3>Kent Huang</h3><br>
			        <p>Educational Background:<br><br>B.Sc.Kin, University of British Columbia</p><br>
			        <p>Experience:<br><br>Coach at ClearOne Badminton Centre</p><br>
			        <p>Motivation:<br><br>"Your badminton goals should be out of reach, but never out of sight."</p>
			        <p>~Felicity Luckey</p>
				
		        </div>
			
		        <div class="review">
			        <p>Review</p><br>
			        <p>"Fantastic tutor. He's a spectacular mentor and friend. He knows everything there is to know about badminton and helped to improve all aspects of my game. He teaches efficiently and effectively with lots of tips to help you get better." ~Michael, 3st year University, Vancouver</p>
		        </div>
	        </div>

		
	        <div id="rightmaincontent">
		        <div class="coursedescriptitle">
			        <h3>Learning Outcomes</h3>
		        </div>
			
		        <div class="coursedescrip">
				    <p>-Discuss strategies  and helpful habits to have</p>
				    <p>-Identify possible flaws in technique</p>
				    <p>-Design training regimen to improve your game</p>
				    <p>-Discuss meal plans</p>
				    <p>-Evaluate short term and long term goals</p>
			    </div>
			
		        <button type="button" onclick="location.href='http://<?php echo $root; ?>tables/table_fitness.php'">Book now</button>
	        </div>
        </div>

        <!-- Main Footer -->
<?php
    include("../config.php");
    include(ROOT."footer.php");
?>
        </div>
	</div>
</body>
</html>	
