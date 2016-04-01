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

        <!-- Main Header -->
        <?php
            include ("header.php");
        ?>

        <!-- main content section -->
	    <div id="main-content">
		    <div id="header">
			    <h1>Career</h1>
		    </div>
	        
            <!-- career form -->
	        <form id="career-form" onsubmit="return validateForm();" method="post" action="career_success.php">
	            <div class="left">
                    <fieldset><legend>Personal</legend>
                        <!-- name -->
	                    <label for="txtFirstName" class="required">Name</label>
		                <input type="text"  id="txtFirstName" placeholder="First Name" onblur="warnNameInvalid('txtFirstName')">
                        <input type="text" id="txtLastName" placeholder="Last Name" onblur="warnNameInvalid('txtLastName')">
                        <span id="txtFirstNameHint" class="hint">Please enter your first name.</span>
                        <span id="txtLastNameHint" class="hint">Please enter your last name.</span>
	                    <!-- name -->

                        <!-- email -->
	                    <label for="txtEmail" class="required">Email</label>
		                <input type="email" id="txtEmail" placeholder="Email" onblur="warnEmailInvalid('txtEmail')">
                        <span id="txtEmailHint" class="hint">Please enter a valid email.</span>
	                    <!-- email -->

                        <!-- phone -->
	                    <label for="txtPhone" class="required">Phone</label>
		                <input type="text" id="txtPhone" placeholder="123-456-7890" maxlength="12" onblur="warnPhoneInvalid('txtPhone')" onkeypress="formatPhone('txtPhone',event)">
	                    <span id="txtPhoneHint" class="hint">Please enter a valid phone number.</span>
                        <!-- phone -->

                        <!-- address -->
	                    <label for="txtAddress" class="required">Address</label>
		                <input type="text" id="txtAddress" placeholder="Street Address" onblur="warnAddressInvalid('txtAddress')">
                        <span id="txtAddressHint" class="hint">Please enter your address.</span>
	                    <!-- address -->

                        <!-- city -->
	                    <label for="selCity" class="required">City</label>
                        <select id="selCity" onchange="warnCityInvalid('selCity')">
                            <option value="" label=" "></option>
	                        <option value="Vancouver">Vancouver</option>
	                        <option value="Burnaby">Burnaby</option>
	                        <option value="Other">Other</option>
	                    </select>
                        <span id="selCityHint" class="hint">Please select a city.</span>
                        <!-- city -->
	                </fieldset>

	                <fieldset><legend>Qualifications</legend>
                        <!-- cover letter -->
		                <label for="filCoverLetter" class="required">Cover Letter</label>
			            <input type="file" id="filCoverLetter" accept=".pdf,.doc,.docx" onchange="warnCoverLetterInvalid('filCoverLetter')">
                        <span id="filCoverLetterHint" class="hint">Please include your cover letter (Word or PDF file).</span>
                        <!-- cover letter -->

                        <!-- resume -->
		                <label for="filResume" class="required">Resume</label>
			            <input type="file" id="filResume" accept=".pdf,.doc,.docx" onchange="warnResumeInvalid('filResume')">
	                    <span id="filResumeHint" class="hint">Please include your resume (Word or PDF file).</span>
                        <!-- resume -->
                    </fieldset>

                    <!-- about -->
	                <fieldset><legend>Tell us about yourself (Please limit to 500 words)</legend>
	                    <label for="taAbout" class="required">About me</label>
		                <textarea id="taAbout" rows="10" cols="50" onblur="warnAboutInvalid('taAbout')"></textarea>
	                    <span id="taAboutHint" class="hint">Please tell us about yourself.</span>
                    </fieldset>
                    <!-- about -->
	            </div>

	            <div class="right">
                    <!-- openings -->
		            <fieldset><legend>Openings</legend>
		                <label for="txtInstructor_0">Instructor</label>
			            <input type="text" id="txtInstructor_0" disabled>

		                <label for="txtInstructor_1">Instructor</label>
			            <input type="text" id="txtInstructor_1" disabled>

		                <label for="txtInstructor_2">Instructor</label>
			            <input type="text" id="txtInstructor_2" disabled>

		                <label for="txtInstructor_3">Instructor</label>
			            <input type="text" id="txtInstructor_3" disabled>
		            </fieldset>
                    <!-- openings -->

                    <!-- subject -->
		            <fieldset>
		                <label for="selSubject">Subject</label>
                        <select id="selSubject">
                            <option value="" label=" "></option>
                            <option value="economics">Economics</option>
                            <option value="professionalWriting">Professional Writing</option>
		                    <option value="computerScience">Computer Science</option>
		                    <option value="math">Math</option>
		                    <option value="fitness">Fitness</option>
		                </select>		                
		            </fieldset>
                    <!-- subject -->

                    <!-- sub category -->
		            <fieldset>
		                <label for="selCategory">Catagory</label>
                        <select id="selCategory">
                            <option value="" label=" "></option>
		                    <option value="Vancouver">Java</option>
		                    <option value="Burnaby">Calculus</option>
		                    <option value="Other">Yoga</option>
		                </select>		                
		            </fieldset>
                    <!-- sub category -->
                </div>

                <br class="clear">
	            <input type="submit" value="Apply">
                <input type="reset" value="Reset" onclick="clearHints()">
		    </form><!-- career form -->
	    </div>

        <!-- Main Footer -->
        <?php
            include("footer.php");
        ?>
    </div>
</body>
</html>
