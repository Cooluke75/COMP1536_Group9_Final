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
<title>Professional Writing</title>
<meta charset="utf-8">


</head>

    <body>
        <div id="main-wrapper">
        
<?php
    include("../config.php");
    include(ROOT."header.php");
?>
        
        <!-- Main content section -->
	    <header>
	        <h1>Professional Writing</h1>
	    </header>

	    <div class="content">
		
		    <div class ="row1">
			    <div id ="imag">
				    <img src="images/courses_Writing.jpg" alt="Subject name" width="400" height="200"/>
			    </div>
			
			    <div id ="intro">
			    <h2>Professional Writing</h2>
			    <p><br>Have you ever felt headache when it comes to writing for school or for work? Wondering why some people can write and communicate so concise and effectively? A+ Academy can help! <br><br>One of the most effective ways to communicate is through writing. We are currently offering essay, professional report and academy thesis writing courses. If you want to improve your communication skills in those areas, register with A+ Academy today!<br><br></p>
			    
			    </div>
		    </div>

		    <div class="row2">
			
			    <a href="../courses/courses_essay.php">
			    <div id ="c1" class="courses">
			    <h3 id="c1title">Essay Writing</h3>
			    <p>Throughout your academic career, you will often encounter writing an essay. You may be assigned an essay for class, enter an essay contest or write essays for college admissions. This course will enhance your communication and essay writing skills.</p>
			    </div>
			    </a>
			
			    <a href="../courses/courses_report.php">
			    <div id ="c2" class="courses">
			    <h3 id="c2title">Professional Reports</h3>
			    <p>Writing a professional report can sometimes be time consuming and stressful. This course will prepare you for general professional reports you may need to write at work or in school and provide you with a guide on how to write an effective report efficiently.</p>
			    </div>
			    </a>
			
			    <a href="../courses/courses_thesis.php">
			    <div id ="c3" class="courses">
			    <h3 id="c3title">Academy Thesis</h3>
			    <p>If you are into research or want to pursue postgraduate education, you will likely encounter the need to write a thesis. This course will give you a head start and help you prepare for your future success.</p>
			    </div>
			    </a>
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
