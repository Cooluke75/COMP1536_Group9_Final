<?php 
    include("config.php");
?>

        <!-- Main Header -->
        <div id="main-header">

            <div id="logo">
                <a href="http://<?php echo $root; ?>index.php"><img src="images/logo.png" height="80" width="80" alt="A+ Logo"></a>
            </div>
		        
		    <div id="title">
                <h1>Aplus Academy</h1>
                <h2>Plan Learn Utilize Succeed</h2>
		    </div>
            
      <?php
        if (isLoggedIn()){
          echo '<div id="signin">
          <h4>Here you are</h4>';
          echo '<h5>Welcome '.$_SESSION['SESS_FIRST_NAME'].', '.$_SESSION['SESS_LAST_NAME'].'</h5>';
          echo '<h5><a href="logout.php">Logout</a></h5>';
          echo '</div>';

        } else {echo '
          <div id="signin">
              <form action="login.php" method="post">

              <fieldset><legend>Sign-in</legend>
                  <input type="text" name="email-address" placeholder="Email Address" required><span><a href="#">&nbsp;I want to deregister myself&nbsp;</a></span><br>
                  <input type="password" name="password" placeholder="Password" required><span><a href="#">&nbsp;Forgot password</a></span><br>
                  <input type="submit" class="btn btn-success">&nbsp;<span><a href="#" data-toggle="modal" data-target="#myModal">Not a member? Register here</a></span>
                    </fieldset>
              </form>
              </div>';
                if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
                  echo '<div id="signin">
							<ul class="err">';
							foreach($_SESSION['ERRMSG_ARR'] as $msg) {
							echo '<li>',$msg,'</li>'; 
							}
						echo '</ul>
						</div>';
                  unset($_SESSION['ERRMSG_ARR']);
                }
            
          }
          ?>
      </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Registration Form</h4>
                  </div>
                  <div class="modal-dialog modal-vertical-centered">
                  <div class="modal-body">
                          <!--Regsisteration form-->
                          <div class="reg_pop">
                          
                              <form name="regForm" action="register.php" method="post" id="regForm" >
                                  <fieldset>
                                      <input type="text" name="firstName" placeholder="Your First Name*" id="firstName"/>
                                      <input type="text" name="lastName" placeholder="Your Last Name*" id="lastName"><span id="hintNameValid"></span><br>
                                      <input type="radio" name="gender" value="male" id="genderMale" >Male
                                      <input type="radio" name="gender" value="female" id="genderFemale">Female<span id="hintGenderValid"></span><br>
                                      <input type="email" name="email" placeholder="Your Email Address*" id="email" ><span id="hintEmailValid"></span><br>
                                      <input type="password" name="password_0" placeholder="Your Password*" id="password_0"><span class="hintPasswordValid">Must contain at least 7 characters; at least 1 lowercase, 1 uppercase and 1 number.</span><br>
                                      <input type="password" name="password_1" placeholder="Confirm Password*" id="password_1" ><span class="hintPasswordValid">Must contain at least 7 characters; at least 1 lowercase, 1 uppercase and 1 number.</span><br>
                                      <br>               
                                      (Optional)<br>
                                      <input type="text" name="school" placeholder="School"><br>
                                      <input type="text" name="major" placeholder="Major of Study"><br>
                                      <label>Grade:
                                          <select name="grades">
                                              <option value="Select Your Grade">--Select Your Grade--</option>
                                              <optgroup label="High School">
                                                  <option value="Grade 8">Gr8</option>
                                                  <option value="Grade 9">Gr9</option>
                                                  <option value="Grade 10">Gr10</option>
                                                  <option value="Grade 11">Gr11</option>
                                                  <option value="Grade 12">Gr12</option>
                                              </optgroup>
                                              <optgroup label="Post Secondary School">
                                                  <option value="1st Year Post Secondary">Yr1</option>
                                                  <option value="2nd Year Post Secondary">Yr2</option>
                                                  <option value="3rd Year Post Secondary">Yr3</option>
                                                  <option value="4th Year Post Secondary">Yr4</option>
                                              </optgroup>
                                              <option value="Other">Other</option>
                                          </select>
                                      </label>
                                      <br>

                                      <br>
                                      <input type="submit" id="submit">
                                      <button type="reset">Reset</button>
                                  </fieldset>
                              </form>
                          </div>

                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
        </div>

	    <!-- navigation -->
	    <div class="wrapper">
	        <ul id="navbar">
		        <li><a href="http://<?php echo $root; ?>index.php">Home</a></li>
		        <li><a href="#">Subjects</a>
			        <ul>
				        <li class="subject"><a href="http://<?php echo $root; ?>subjects/subject_economy.php">Economics</a>
                            <ul>
					            <li><a href="http://<?php echo $root; ?>courses/courses_macroeconomics.php">Macro</a></li>
							    <li><a href="http://<?php echo $root; ?>courses/courses_microeconomics.php">Micro</a></li>
							    <li><a href="http://<?php echo $root; ?>courses/courses_entrepreneurship.php">Entrepreneurship</a></li>
						    </ul>
					    </li>

					    <li class="subject"><a href="http://<?php echo $root; ?>subjects/subject_writing.php">Professional Writing</a>
					        <ul>
						        <li><a href="http://<?php echo $root; ?>courses/courses_essay.php">Essay</a></li>
						        <li><a href="http://<?php echo $root; ?>courses/courses_report.php">Report</a></li>
						        <li><a href="http://<?php echo $root; ?>courses/courses_thesis.php">Thesis</a></li>
					        </ul>
					    </li>

					    <li class="subject"><a href="http://<?php echo $root; ?>subjects/computer_science.php">Computer Science</a>
                            <ul>
						        <li><a href="http://<?php echo $root; ?>courses/html.php">HTML</a></li>
							    <li><a href="http://<?php echo $root; ?>courses/cplusplus.php">C++</a></li>
							    <li><a href="http://<?php echo $root; ?>courses/java.php">Java</a></li>
						    </ul>
					    </li>

					    <li class="subject"><a href="http://<?php echo $root; ?>subjects/subject_math.php">Math</a>
                            <ul>
						        <li><a href="http://<?php echo $root; ?>courses/courses_calculus.php">Calculus</a></li>
						        <li><a href="http://<?php echo $root; ?>courses/courses_matrix.php">Matrix</a></li>
						        <li><a href="http://<?php echo $root; ?>courses/courses_algebra.php">Algebra</a></li>
						    </ul>
					    </li>

					    <li class="subject"><a href="http://<?php echo $root; ?>subjects/subject_fitness.php">Fitness</a>
                            <ul>
						        <li><a href="http://<?php echo $root; ?>courses/courses_sports.php">Sports</a></li>
						        <li><a href="http://<?php echo $root; ?>courses/courses_weight_training.php">Weight training</a></li>
						        <li><a href="http://<?php echo $root; ?>courses/courses_dance.php">Dance</a></li>
						    </ul>
					    </li>
				    </ul>
		        </li>
                <li><a href="http://<?php echo $root; ?>forum.php">Forum</a></li>
		        <li><a href="http://<?php echo $root; ?>career.php">Careers</a></li>
		        <li><a href="http://<?php echo $root; ?>about.php">About Us</a></li>
		        <li><a href="http://<?php echo $root; ?>contact_us.php">Contact Us</a></li>
            </ul>
        </div>
