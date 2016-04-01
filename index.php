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
        <title>A+ Academy</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <link href="style/base.css" rel="stylesheet" type="text/css">
        <link href="style/style_home.css" rel="stylesheet" type="text/css">
        <!--CSS for registeration form-->
        <link href="style/style_registration.css" rel="stylesheet" type="text/css"/>

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
    include (ROOT."header.php");
?>

            <!-- Main Content -->
            <div id="main-content">
                <div class="content-block" id="aplus-intro">
                    <div class="col-1">
                  	    <img src="images/logo2.png" alt="Logo" height="150" width="150">
                    </div>

                    <div class="col-2">
                        <h1>Aplus Academy</h1>
                        <div class="description">
                            <p>Our goal at Aplus Academy is to help students find and connect with our qualified tutors who specialize in an array of subjects. The “plus” in Aplus Academy stands for Plan, Learn, Utilize and Succeed: outlining a roadmap for educational excellence.</p>
                        </div>
                    </div>

                    <div class="col-3">
                        <div id="sign-up"><a href="#" data-toggle="modal" data-target="#myModal">Sign Up Today!</a></div>
                    </div>
                </div>

                <div class="content-block">
                    <div class="col-1">
                          <h3>Courses</h3>
                          <ul>
                                <li>Macroeconomics</li>
                                <li>Microeconomics</li>
                                <li>Entrepreneurship</li>
                          </ul>
                    </div>

                    <div class="col-2">
                        <h2>Economics</h2>
                  	    <div class="description">
                            <p>Economics is the study of how people choose to use resources.</p>
                            <p>Resources include the basic four factors of production: Natural resources, Human resources, Capital and Entrepreneurship. And the knowledge of how to combine them to create useful products and services is the main idea in sucess.economics includes the study of labor, land, and investments, of money, income, and production, and of taxes and government expenditures. Economists seek to measure well-being, to learn how well-being may increase over time, and to evaluate the well-being of the rich and the poor.</p>
                            <p>In A+ Academy, we teach you everything from a general prospective to view the world to a more detailed skill on starting you own business. Everyone can be sucessful in life, and we are here to help.</p>
                        </div>
                    </div>

                    <div class="col-3">
                        <a href="subjects/subject_economy.php"><img src="images/economics_title.jpg" alt="Economics Image" height="150" width="150"></a> 
                    </div>
                </div>

                <div class="content-block">
                    <div class="col-1">
                        <h3>Courses</h3>
                        <ul>
                            <li>Essay</li>
                            <li>Report</li>
                            <li>Thesis</li>
                        </ul>
                    </div>

                    <div class="col-2">
                        <h2>Professional Writing</h2>
                  	    <div class="description">
                              <p>Have you ever felt headache when it comes to writing for school or for work? Wondering why some people can write and communicate so concise and effectively? A+ Academy can help!</p>
                              <p>One of the most effective ways to communicate is through writing. We are currently offering essay, professional report and academy thesis writing courses. If you want to improve your communication skills in those areas, register with A+ Academy today!</p>
                        </div>
                    </div>

                    <div class="col-3">
                        <a href="subjects/subject_writing.php"><img src="images/courses_Writing.jpg" alt="Writing Image" height="150" width="150"></a>
                    </div>
                </div>

                <div class="content-block">
                    <div class="col-1">
                        <h3>Courses</h3>
                        <ul>
                            <li>HTML</li>
                            <li>C++</li>
                            <li>Java</li>
                        </ul>
                    </div>

                    <div class="col-2">
                        <h2>Computer Science</h2>
                        <div class="description">
                            <p>Aplus Academy offers beginner to intermediate level courses in computer science.</p>
                            <p>We currently teach three programming languages: HTML, C++ and Java. Whether you're just starting out or you already have some knowledge in computing, we have a course for you.</p>
                        </div>
                    </div>

                    <div class="col-3">
                        <a href="subjects/computer_science.php"><img src="images/subject_computing.jpg" alt="Computing Image" height="150" width="150"></a>
                    </div>
               </div>

                <div class="content-block">
                    <div class="col-1">
                        <h3>Courses</h3>
                        <ul>
                            <li>Calculus</li>
                            <li>Matrix</li>
                            <li>Algebra</li>
                        </ul>
                    </div>

                    <div class="col-2">
                        <h2>Math</h2>
                        <div class="description">
                            <p>Working on math homework now? We can help. Our math tutors are experts at Algebra, Calculus, Matirx, and everything in between.They’ll help with everything math class throws at you.</p>
                            <p>Whether you're still learning the basics or mastering more difficult concepts, we're ready to help. Sign up now and it is easy to Boost Your Math Grade.</p>
                        </div>
                    </div>

                    <div class="col-3">
                        <a href="subjects/subject_math.php"><img src="images/subject_math.jpg" alt="Math Image" height="150" width="150"></a>
                    </div>
                </div>

                <div class="content-block">
                    <div class="col-1">
                        <h3>Courses</h3>
                        <ul>
                            <li>Sports</li>
                            <li>Weight Training</li>
                            <li>Dance</li>
                        </ul>
                    </div>

                    <div class="col-2">
                        <h2>Fitness</h2>
                        <div class="description">
                            <p>Here at A+ Academy, not only do we look to improve your mental strength, but also your physical strength. With options like sports, weight training and dance you have a variety of ways to get the healthy physique you deserve.</p>
                            <p>Through the internet we can help you achieve your fitness goals at a time suitable to your schedule. We’re dedicated to developing the most effective training programs just for you and we strive to help you become the fittest you can be!</p>
                        </div>
                    </div>

                    <div class="col-3">
                        <a href="subjects/subject_fitness.php"><img src="images/subject_fitness.jpg" alt="Fitness Image" height="150" width="150"></a>
                    </div>
                </div>
            </div>

<?php
    include("footer.php");
?>
        </div>
    </body>
</html>
