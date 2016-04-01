<?php
  include 'functions.php';
  require_once('config.php');
  session_start();

  // Connect to server and select database.
  mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect, error: ".mysql_error());
  mysql_select_db(DB_DATABASE)or die("cannot select DB, error: ".mysql_error());
  $tbl_name="topic"; // Table name

    $sql="SELECT * FROM $tbl_name ORDER BY id DESC";
  // ORDER BY id DESC is order result by descending
  $result=mysql_query($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>A+ Academy</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <link href="style/base.css" rel="stylesheet" type="text/css">
        <link href="style/style_home.css" rel="stylesheet" type="text/css">
        <!--CSS for registeration form-->
        <link href="style/style_registration.css" rel="stylesheet" type="text/css"/>

        <link rel="stylesheet" type="text/css" href="style/style_forum.css">

        <!-- Import font -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>



        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!-- Registeration form validation -->
        <script type="text/javascript" src="js/registeration_Form_script.js"></script>

    </head>
    <body>
        <div id="main-wrapper">
        
<?php
    include ("header.php");
?>

            <!-- Main Content -->
            <div class="body_wrapper">
            <!-- body Header -->
            <div class="forum">
                <?php
					if (isLoggedIn()) {
						include ("forumChecked.php");
					} else {
						echo '<div id="main-content">
								<h2>Only registered member can access forum;</h2>
								<h2>please sign-in first.</h2>
							  </div>';
					}
				?>
            </div> <!-- end of class forum -->
        </div><!--closing body_Wrapper--> 

<?php
    include("footer.php");
?>
        </div>
    </body>
</html>
