<?php
  include 'functions.php';
  require_once('config.php');
  session_start();

  // Connect to server and select database.
  mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect, error: ".mysql_error());
  mysql_select_db(DB_DATABASE)or die("cannot select DB, error: ".mysql_error());
  $tbl_name="topic"; // Table name

    // get value of id that sent from address bar
  $id=$_GET['id'];

  $sql="SELECT * FROM $tbl_name WHERE id='$id'";
  $result=mysql_query($sql);

  $rows=mysql_fetch_array($result);
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
            <td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">
            <tr>
            <td bgcolor="#F8F7F1"><strong><h1><?php echo $rows['topic']; ?></h1></strong></td>
            </tr>

            <tr>
            <td bgcolor="#F8F7F1"><?php echo $rows['detail']; ?></td>
            </tr>

            <tr>
            <td bgcolor="#F8F7F1"><strong>By :</strong> <strong></td>
            </tr>

            <tr>
            <td bgcolor="#F8F7F1"><strong>Date/time : </strong><?php echo $rows['datetime']; ?></td>
            </tr>
            </table></td>
            </tr>
            </table>
            <BR>
            
            
            <?php
            $tbl_name2="response"; // Switch to table "response"

            $sql2="SELECT * FROM $tbl_name2 WHERE topic_id='$id'";
            $result2=mysql_query($sql2);

            while($rows=mysql_fetch_array($result2)){
            ?>
            
            <table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
            <tr>
            <td><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
            <tr>
            <td bgcolor="#F8F7F1"><strong>ID</strong></td>
            <td bgcolor="#F8F7F1">:</td>
            <td bgcolor="#F8F7F1"><?php echo $rows['id']; ?></td>
            </tr>
            <tr>
            <td width="18%" bgcolor="#F8F7F1"><strong>Name</strong></td>
            <td width="5%" bgcolor="#F8F7F1">:</td>
            <td width="77%" bgcolor="#F8F7F1"></td>
            </tr>
            <tr>
            <td bgcolor="#F8F7F1"><strong>Response</strong></td>
            <td bgcolor="#F8F7F1">:</td>
            <td bgcolor="#F8F7F1"><?php echo $rows['response']; ?></td>
            </tr>
            <tr>
            <td bgcolor="#F8F7F1"><strong>Date/Time</strong></td>
            <td bgcolor="#F8F7F1">:</td>
            <td bgcolor="#F8F7F1"><?php echo $rows['datetime']; ?></td>
            </tr>
            </table></td>
            </tr>
            </table><br>
            

            <?php
            }
            mysql_close();
            ?>

            <BR>
            <table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
            <tr>
            <form name="form1" method="post" action="add_response.php">
            <td>
            <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
            <tr>
            <td valign="top"><strong>Response</strong></td>
            <td valign="top">:</td>
            <td><textarea name="response" cols="45" rows="3" id="answer"></textarea></td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td><input name="id" type="hidden" value="<?php echo $id; ?>"></td>
            <td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset"></td>
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
