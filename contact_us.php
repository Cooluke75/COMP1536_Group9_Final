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
	<title>Contact Us</title>
    <link href="style/base.css" rel="stylesheet" type="text/css">
	<link href="style/style_contact_us.css" rel="stylesheet" type="text/css"/>
	

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

    <script type="text/javascript" src="js/contact_us.js"></script>

    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
    function initialize() {
        var mapProp = {
        center:new google.maps.LatLng(49.2512,-123.0017),
        zoom:15,
        mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
	</head>
	
	<body>
        <div id="main-wrapper">
			<!-- Main Header -->
			<?php
				include ("header.php");
			?>

			<!-- main content section -->
			<div id="main-content">
				<h1>Contact Us</h1>
				<div id="googleMap"></div>
				<div id="rightCol">
					<form id="contact" action="http://webdevfoundations.net/scripts/formdemo.asp" method="post">
						<label for="name1">Name: </label>
						<input type="text" name="name" id="name1"><span id="hintNameValid1"></span><br>
						<label for="email1">Email: </label>
						<input type="text" name="email" id="email1"><span id="hintEmailValid1"></span><br>
						<input type="radio" name="comments" id="inquiries" value="inquiries">
						<label>General Inquiries</label>
						<input type="radio" name="comments" id="feedback" value="feedback">
						<label>Course Feedback</label>
						<br>
						<label for="subject">RE: </label>
						<input type="text" name="subject" id="subject"><span id="hintSubjectValid"></span><br>
						<select name="tutors" id="Catagory_dropdown">
							<option value="select tutor">--Select Catagory--</option>
							<option value="space">&nbsp;</option>
							<option value="Economics">Economics</option>
							<option value="Computer Science">Computer Science</option>
							<option value="Writing">Professional Writing</option>
							<option value="Math">Math</option>
							<option value="Fitness">Fitness</option>
						</select>
						<br>
						<label for="message">Message (Please limit to 200 words): </label><span id="hintMessageValid"></span><br>
						<textarea name="message" id="message" cols="30" rows="10"></textarea>
						<br>
						<input type="submit">
					</form>
				</div>
                <br class="clear">
			</div>

			<!-- Main Footer -->
				<?php
					include("footer.php");
				?>
        </div>
	</body>
</html>
