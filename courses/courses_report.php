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
	<title>Courses - Report</title>
	<meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="../style/base.css" rel="stylesheet" type="text/css">
	<link href="../style/style_courses.css" rel="stylesheet" type="text/css">

    <!--CSS for registeration form-->
    <link href="../style/style_registration.css" rel="stylesheet" type="text/css"/>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Registeration form validation -->
    <script type="text/javascript" src="../js/registeration_Form_script.js"></script>
</head>
	
<body class="writing">
    <!-- main wrapper wraps the whole page -->
    <div id="main-wrapper">

<?php
    include("../config.php");
    include(ROOT."header.php");
?>

        <!-- main content section -->
        <div id="main-content">

            <!-- left column -->
		    <div class="leftmaincontent">
		        <div class="title">
			        <h1>Professional Reports</h1>
		        </div>
			
		        <div class="imageandrating">
			        <img src="images/LukeLee.jpg" alt="Luke Lee" height="260" width="200">
		        </div>
			
		        <div class="tutordescrip">
			        <h3>Luke Lee</h3>
			        <p>Educational Background:<br>BoC, University of British Columbia</p><br>
			        <p>Experience:<br>Senior Coordinator TD</p><br>
			        <p>Motivation:<br>Genius is one percent inspiration, ninety-nine percent perspiration.<br>~Thomas Edison</p>
		        </div>
			
			    <div class="review">
			        <p>Review</p>
                    <p>Very wise and helpful. Knows a lot about his craft. I don't necessarily agree with all of his pedagogy, but if you talk to him one-on-one you can get through to his other ideas. Really a massive figure.<br>~Anonymous</p>
			    </div>
		    </div>
			
            <!-- right column -->	
		    <div id="rightmaincontent">
			    <div class="coursedescriptitle">
			        <h3>Learning Outcomes</h3>
			    </div>
			
			    <div class="coursedescrip">
			        <p>Professional report is one of the most effective and common ways to communicate important information in workplaces or academic studies.
                        This course provides you with an overview of how to create professional reports and documents:</p>
                    <ol>
                        <li>Identify purpose</li>
                        <li>Identify audience</li>
                        <li>Know your topic well</li>
                        <li>Layout and design structure</li>
                        <li>Write, edit, proof read and finish</li>
                    </ol>
                    <!-- reference from http://www.makeuseof.com/tag/writing-professional-reports-documents/ -->
			    </div>
			
			    <button type="button" onclick="location.href='http://<?php echo $root; ?>tables/table_professional_writing.php'">Book now</button>
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
