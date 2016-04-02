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
	<title>Dance</title>
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
			        <h1>Dance</h1>
		        </div>
		
		        <div class="imageandrating">
			        <img src="images/EricLin.JPG" alt="Profile1" height="260" width="200">
		        </div>
			
		        <div class="tutordescrip">
			        <h3>Eric Lin </h3>
			        <p>Educational Background:<br><br>B.Sc.Kin, Simon Fraser University</p><br>
			        <p>Experience:<br><br>Zumba Instructor at ZumbaFitness</p><br>
			        <p>Motivation:<br><br>"When you have a good workout, it clears everything up mentally, physically, and you just have a better day."</p>
			        <p>~Minka Kelly</p>
				
		        </div>
			
		        <div class="review">
			        <p>Review</p><br>
			        <p>"High energy, fast paced lessons that get you sweating and jamming to the beat. This really helped me get into shape and enjoy myself while I was at it. This is a kind a exercise I can really fall in love with and I think others will feel the same way. Eric is a phenomenal teacher and really encouraged me to get fit and lose fat. I now feel more energetic throughout the day." ~Grace, 3rd year University, Burnaby</p>
		        </div>
	        </div>

		
	        <div id="rightmaincontent">
		        <div class="coursedescriptitle">
			        <h3>Learning Outcomes</h3>
		        </div>
			
		        <div class="coursedescrip">
				    <p>-Identify goals</p>
				    <p>-Develop a plan to maximize time and efficiency</p>
				    <p>-Get in fantastic shape</p>
				    <p>-Discuss meal plans</p>
				    <p>-Develop dancing skills to show off and while getting fit</p>
			    </div>
			
		        <button type="button" onclick="location.href='http://<?php echo $root; ?>tables/table_fitness.php'">Book now</button>
	        </div>
        </div>
        <br class="clear">
        <!-- Main Footer -->
<?php
    include("../config.php");
    include(ROOT."footer.php");
?>
        </div>
	</div>
</body>
</html>
		
		
		
		
		
		
		
