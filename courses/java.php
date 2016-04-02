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
	<title>Courses - Java</title>
	<meta charset="utf-8">
    <link href="../style/base.css" rel="stylesheet" type="text/css">
	<link href="../style/style_courses.css" rel="stylesheet" type="text/css">

        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!--CSS for registeration form-->
    <link href="../style/style_registration.css" rel="stylesheet" type="text/css"/>

    <!-- Import font -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

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
			        <h1>Java</h1>
		        </div>
			
		        <div class="imageandrating">
			        <img src="images/KabirCahill.jpg" alt="Profile1" height="260" width="200">
		        </div>
			
		        <div class="tutordescrip">
			        <h3>Kabir Cahill</h3><br>
			        <p>Educational Background:<br><br>DIPOLMA BCIT CST PROGRAM</p><br>
			        <p>Experience:<br><br>Kabir has worked in the software development industry for several years since graduating from the CST program at BCIT. He has practical hands-on knowledge, which gives him a unique perspective when teaching his students.</p><br>
			        <p>Motivation:<br><br>Kabir still remembers his first "Hello World!" program he wrote as a student. Since then, he gained a passion for helping others develop an interest in coding.</p>
				
		        </div>
			
		        <div class="review">
			        <p>Review</p>
			        <p>"Extremely effective tutor. Went above and beyond for us. The class was extremely easy because of him." ~Anonymous </p>
		        </div>
	        </div>

		
	        <div id="rightmaincontent">
		        <div class="coursedescriptitle">
			        <h3>Learning Outcomes</h3>
		        </div>
			
		        <div class="coursedescrip">
			        <p>Students can learn the essentials of object-oriented programming with Java. They will learn to use predefined Java library classes and use and create classes of their own. Topics also including encapsulation, inheritance and polymorphism.</p>
			        <p></p>
			        <p></p>
			        <p></p>
			        <p></p>
		        </div>
			
		        <button type="button" onclick="location.href='http://<?php echo $root; ?>tables/table_computer_science.php'">Book now</button>
	        </div>
        </div>
        <br class="clear">

<?php
    include("../config.php");
    include(ROOT."footer.php");
?>
	</div>
</body>
</html>
		
		
		
		
		
		
		
