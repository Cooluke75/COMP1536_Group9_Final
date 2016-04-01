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
<html>
<head>
    <meta charset="utf-8">
    <title>About Us</title>
    <link href="style/base.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="style/style_about.css">

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
</head>
	
<body>
    <!-- main wrapper wraps the whole page -->
    <div id="main-wrapper">
      
<?php
  include ("header.php");
?>
        
        
        <!-- main content section -->
        <div id="main-content">
            <div id="content-title">
                <h1>About us</h1>
            </div>

            <div id="introduction">
                <div id="image1">
                    <img src="images/face_1.png" height="170" width="150" alt="A+ Logo">
                </div>
                <div id="wrapper1">
                    <h2>Introduction</h2>
                    <p>&nbsp;&nbsp;&nbsp;Given the pressure felt by high school, college and university students to perfom well academically, many students desire extra help with their studies. We are a group of graduated students from BCIT from various faculties. With a united goal to help our future generations doing well academically. We encourage anyone who shares the passion of their knowledge and teaching to join us!!
                <br>
                <br>
                </p>
                <ul id="founder_list">
                	<li>Co-Founder: Eric Lin</li>
                	<li>Co-Founder: Kabir Cahill</li>
                	<li>Co-Founder: Kent Huang</li>
                	<li>Co-Founder: Luke Lee</li>
                	<li>Co-Founder: Roger Zhang</li>
                </ul>
                
                <div class="clear"></div>
            </div>
        </div>

            <div id="history">
                <div id="image2">
                    <img src="images/history.jpg" height="260" width="150" alt="A+ Logo">
                </div>
                <div id="wrapper2">
                    <h2>History</h2>
                <br>
                <br>
                <p>Started in 2012, inspired by university students and professors, we have recuited a group of various university graduates to help others in need of doing well academically as well as physically. Over the four years, our website provided thousands of students with the help they needed in over 15 courses. And established a connection with various institudes and universities.
                <br><br>Our goals are to guide students in a concise, efficient and practical way to help them realize their academic potential. We also hope to reach a broader audience by having tutors avaliable morning and evening to better accommodate our clients' schedules.
                <br><br>Our aim is to make our services easily accessible and intuitive with a mordern and sleek design. We have adapted over 20 teaching methods and are able to provide the best tutoring experience you've ever had!
                <br><br>
            	</p>
                    <div class="clear"></div>
                </div>
            </div>
            <br>
            <br>
        </div>

<?php
  include ("footer.php");
?>
    </div>

</body>
</html>
