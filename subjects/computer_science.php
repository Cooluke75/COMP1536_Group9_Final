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

        <!-- Import font -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!-- Registeration form validation -->
        <script type="text/javascript" src="../js/registeration_Form_script.js"></script>
<title>Computer Science</title>
<meta charset="utf-8">


</head>

    <body>
        <div id="main-wrapper">
<?php
    include("../config.php");
    include(ROOT."header.php");
?>

	    <header>
	        <h1>Computer Science</h1>
	    </header>

	    <div class="content">
		
		    <div class ="row1">
			    <div id ="imag">
				    <img src="../images/subject_computing.jpg" alt="Subject name" width="400" height="200"/>
			    </div>
			
			    <div id ="intro">
			    <h2>Hello World</h2>
			    <p><br>Aplus Academy offers beginner to intermediate level courses in computer science. <br><br>We currently teach three programming languages: HTML, C++ and Java. Whether you're just starting out or you already have some knowledge in computing, we have a course for you.<br><br></p>
			    
			    </div>
		    </div>

		    <div class="row2">
			
			    <a href="../courses/html.php">
			    <div id ="c1" class="courses">
			    <h3 id="c1title">HTML</h3>
			    <p>Using HTML and CSS, students are able to learn the basics of web development in a fun and interactive format. In only a short period of time, they are able to make fully-functioning websites using the most up-to-date web standards.</p>
			    </div>
			    </a>
			
			    <a href="../courses/cplusplus.php">
			    <div id ="c2" class="courses">
			    <h3 id="c2title">C++</h3>
			    <p>Built upon C, C++ is its object-oriented predecessor and one of the industry's most widely used programming languages. Students will learn to create classes, use arrays and pointers, and create their own command-line programs.</p>
			    </div>
			    </a>
			
			    <a href="../courses/java.php">
			    <div id ="c3" class="courses">
			    <h3 id="c3title">Java</h3>
			    <p>Students can learn the essentials of object-oriented programming with Java. They will learn to use predefined Java library classes and use and create classes of their own. Topics also including encapsulation, inheritance and polymorphism.</p>
			    </div>
			    </a>
		    </div>
	    </div>

<?php
    include("../config.php");
    include(ROOT."footer.php");
?>
    </div>
</body>
</html>
