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
	<title>Entrepreneurship</title>
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
			        <h1>Intro to Entrepreneurship</h1>
		        </div>
			
		        <div class="imageandrating">
			        <img src="images/RogerZhang.JPG" alt="Profile1" height="260" width="200">
		        </div>
			
		        <div class="tutordescrip">
			        <h3>Roger Zhang</h3><br>
			        <p>Educational Background:<br><br>MBA, University of British Columbia</p><br>
			        <p>Experience:<br><br>Senior analyst at BMO</p><br>
			        <p>Motivation:<br><br>“Be the change that you wish to see in the world.”</p>
			        <p>~Mahatma Gandhi</p>
				
		        </div>
			
		        <div class="review">
			        <p>Review</p><br>
			        <p>"Awesome tutor. Has this way about him that makes you like him. He really knows a lot as well and is very willing to help in any way he can. Its a great class and he is very very clear as to what he wants you to know." ~George, 1st year University, Vancouver</p>
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
			        <p>"Luke was one of my favourite tutors at Aplus. He's very passionate about the material, but more so about practical approach. He is kind, approachable and really goes above and beyond for his students." ~Anonymous</p>
		        </div>
	        </div>

		
	        <div id="rightmaincontent">
		        <div class="coursedescriptitle">
			        <h3>Learning Outcomes</h3>
		        </div>
			
		        <div class="coursedescrip">
				    <p>-Discuss examples of current entrepreneurs</p>
				    <p>-Evaluate methods of entering a venture</p>
				    <p>-Identify characteristics of sucessful entrepreneurs</p>
				    <p>-Identify the critical concepts of business planning</p>
				    <p>-Evaluate business plans</p>
			    </div>
			
		        <button type="button" onclick="location.href='http://<?php echo $root; ?>tables/table_economics.php'">Book now</button>
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
		
		
		
		
		
		
		
