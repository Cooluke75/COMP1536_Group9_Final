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
    <meta charset="utf-8">
    <title>Career</title>

    <script type="text/javascript" src="js/career_form.js"></script>

        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!--CSS for registeration form-->
    <link href="style/style_registration.css" rel="stylesheet" type="text/css"/>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Registeration form validation -->
    <script type="text/javascript" src="js/registeration_Form_script.js"></script>

    <link href="style/base.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style/style_career.css">
</head>
	
<body>
    <!-- main wrapper wraps the whole page -->
    <div id="main-wrapper">

        <?php
            include ("header.php");
        ?>

        <!-- main content section -->
	    <div id="main-content">
		    <div id="header">
			    <h1>Career</h1>
		    </div>
	        
			<!-- Successful message -->
			<div id="message">
				<h3>Application Error</h3>
				<p>Sorry, you are not a registered member. Please sign-in first.</p>
			</div>

	    </div>

        <!-- Main Footer -->
        <?php
            include("../footer.php");
        ?>
    </div>
</body>
</html>
