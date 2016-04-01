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
	<title>Courses - Thesis</title>
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
			        <h1>Academy Thesis</h1>
		        </div>
			
		        <div class="imageandrating">
			        <img src="images/RogerZhang.JPG" alt="Roger Zhang" height="260" width="200">
		        </div>
			
		        <div class="tutordescrip">
			        <h3>Roger Zhang</h3>
			        <p>Educational Background:<br>MBA, University of British Columbia</p><br>
			        <p>Experience:<br>Senior analyst at BMO</p><br>
			        <p>Motivation:<br>“Be the change that you wish to see in the world.”<br>~Mahatma Gandhi</p>
		        </div>
			
			    <div class="review">
			        <p>Review</p>
                    <p>"He changed my life and made me the writer and person I am today. Sensing my self-doubt, he made me write without editing myself and taught me not to listen to negativity. Take his courses because they will teach you more than how to write; they will teach you how to live."<br>~Anonymous</p>
			    </div>
		    </div>
			
            <!-- right column -->	
		    <div id="rightmaincontent">
			    <div class="coursedescriptitle">
			        <h3>Learning Outcomes</h3>
			    </div>
			
			    <div class="coursedescrip">
			        <p>If you are thinking about pursuing postgraduate education or academic research, you will likely need to write thesis on your findings
                    and studies. This course helps you get a head start and provides a guide to writing academic thesis:</p>
                    <ol>
                        <li>Identify purpose and significance of study</li>
                        <li>Literature review</li>
                        <li>Methods and analysis of collected data</li>
                        <li>Report on findings</li>
                        <li>Discussion</li>
                        <li>Finishing and revision</li>
                    </ol>
                    <!-- reference from https://www.jou.ufl.edu/grad/forms/Guidelines-for-writing-thesis-or-dissertation.pdf -->
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
