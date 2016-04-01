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

        <link href="style/style_viewAndAdd_topic.css" rel="stylesheet" type="text/css"/>

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
            <div class="topicContent">
            <table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
            <tr>
            <form id="form1" name="form1" method="post" action="add_topic.php">
            <td>
            <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
            <tr>
            <td colspan="3" bgcolor="#E6E6E6"><strong>Create New Topic</strong> </td>
            </tr>
            <tr>
            <td width="14%"><strong>Topic</strong></td>
            <td width="2%">:</td>
            <td width="84%"><input name="topic" type="text" id="topic" size="51"/></td>
            </tr>
            <br>
            <br>
            <tr>
            <td valign="top"><strong>Detail</strong></td>
            <td valign="top">:</td>
            <td><textarea name="detail" cols="50" rows="10" id="detail"></textarea></td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="Submit" value="Submit" /> <input type="reset" name="Submit2" value="Reset" /></td>
            </tr>
            </table>
            </td>
            </form>
            </tr>
            </table>
            </div>

<?php
    include("footer.php");
?>
        </div>
    </body>
</html>
