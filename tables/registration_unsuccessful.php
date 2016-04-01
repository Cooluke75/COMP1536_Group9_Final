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

		<title>Registration Successful</title>
		<meta charset="utf-8">
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
	        
			<!-- Successful message -->
			<div>
				<h2>Registration Unsuccessful</h2>
				<p>Please make you you have logged in first.</p>
                <p>If an error still occurs, please contact us through the contact page.</p>
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
