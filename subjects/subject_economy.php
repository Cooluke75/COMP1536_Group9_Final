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
<title>Economics</title>
<meta charset="utf-8">


</head>

    <body>
        <div id="main-wrapper">
            <!-- Main Header -->
<?php
    include("../config.php");
    include(ROOT."header.php");
?>
            <!-- Main content section -->
            <div id="main-content">
	            <header>
	                <h1>Economics</h1>
	            </header>

	            <div class="content">
		
		            <div class ="row1">
			            <div id ="intro">
                            <div id ="imag">
				                <img src="../images/economics_title.jpg" alt="Subject name" width="400" height="200"/>
			                </div>
			                <h2>What is Economics?</h2>
			                <p><br>Economics is the study of how people choose to use resources.<br><br>Resources include the basic four factors of production: Natural resources, Human resources, Capital and Entrepreneurship. And the knowledge of how to combine them to create useful products and services is the main idea in sucess.economics includes the study of labor, land, and investments, of money, income, and production, and of taxes and government expenditures. Economists seek to measure well-being, to learn how well-being may increase over time, and to evaluate the well-being of the rich and the poor.<br><br></p>
			                <p>In A+ Academy, we teach you everything from a general prospective to view the world to a more detailed skill on starting you own business. Everyone can be sucessful in life, and we are here to help.</p>
			            </div>
		            </div>

		            <div class="row2">
			
			            <a href="../courses/courses_macroeconomics.php">
			            <div id ="c1" class="courses">
			            <h3 id="c1title">Macroeconomics</h3>
			            <p>Macroeconomics is the study of economy as a whole. Our course deals with performance, structure, behavior and decision-making markets that is on national, global and reginal scale.</p>
			            </div>
			            </a>
			
			            <a href="../courses/courses_microeconomics.php">
			            <div id ="c2" class="courses">
			            <h3 id="c2title">Microeconomics</h3>
			            <p>Microeconomics analyzes the market behavior of individual consumers and firms in an attempt to understand the decision-making process of firms and households.</p>
			            </div>
			            </a>
			
			            <a href="../courses/courses_entrepreneurship.php">
			            <div id ="c3" class="courses">
			            <h3 id="c3title">Entrepreneurship</h3>
			            <p>Want to start your own business? We can help! With our guide, you will learn how to start, run and grow you business. We also provide feedbacks on your business proposal.</p>
			            </div>
			            </a>
		            </div>
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
