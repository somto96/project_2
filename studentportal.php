<?php
require('portaldb.php');
require_student_login();
$firstname = $_SESSION['student_firstname'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Student Panel | UNN Portal</title>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/portal.css" rel="stylesheet"/>

        <!-- JS -->
        <script src="js/jquery.js"></script>
        <script src="../js/jquery-1.11.3.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="../nprogress-master/nprogress-master/nprogress.js"></script>

        <!--Embedded CSS codes-->
        <style>
           
            .form-Course_reg {
                margin-top: 100px;
            }

        </style>
        <!--inline CSS codes ends here-->
    </head>
    <body>
        <!--code for navigation bar starts here-->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="margin:0px; background-color:green;"> 
            <!--the code above is to add functionality to the nav bar-->
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".profile-sidebar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <!-- Codes for NAVBAR CONTENTS--> 
                <!-- please note if the dropdown does not work try downloading a new jquery documentation file-->

                <div class="collapse   navbar-collapse navbar-right " id="bs-Departments-navbar-collapse-1">
                    <a class="navbar-brand" href="http://www.unn.edu.ng" target="_blank">UNIVERSITY OF NIGERIA</a> <!-- this particular code controls the logo-->
                </div>
                <!-- code for NAVBAR CONTENTS ends here-->
            </div>
        </nav> 
    </div>
    <!--code for side bar navigation starts here-->
    <div class="container-fluid">
        <div class="row profile">
            <div class="col-md-4">
                <div class="profile-sidebar">
                    <!--side bar profile picture-->
                    <div class="profile-userpic">
                        <img src="images/img_placeholder_avatar.jpg" class="img-responsive" alt="">
                    </div>
                    <!--side bar profile picture ends here-->
                    <!--side bar usertitle starts here-->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            Welcome, <?php echo $firstname; ?>
                        </div>
                        <!--side bar usertitle ends here-->
                    </div>
                    <!--side bar menu starts here-->
                    <?php 
                    function menuitem($link, $icon, $text) {
                        echo '<li class="active">';
                        echo "<a href='$link'>";
                        echo "<span class='glyphicon glyphicon-$icon'";
                        echo" aria-hidden='true'></span>&emsp;$text</a>";
                        echo '</li>';
                    }
                    ?>
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <?php menuitem('studentportal.php', 'home', 'Home'); ?>
                            <?php menuitem('studentprofile.php', 'user', 'Edit Profile'); ?>
                            <?php menuitem('#', 'usd', 'Fees'); ?>
                            <?php menuitem('#', 'education', 'Course Registration'); ?>
                            <?php menuitem('#', 'stats', 'Results'); ?>
                            <?php menuitem('#', 'calendar', 'Exam Schedule'); ?>
                            <li class="active dropdown">
                                <a href="#" class="dropdown-toggle"
                                   data-toggle="dropdown" role="button" 
                                   aria-haspopup="true" aria-expanded="false">
                                    <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>&emsp;Account
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                    <li><a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i>UNN Mail</i></a></li>
                                </ul>
                            </li>
                            <?php menuitem('#', 'home', 'E-Library'); ?>
                            <?php menuitem('studentlogin.php', 'home', 'Logout'); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <footer>

                <div class="row" style="text-align: center; margin: 0px 0px">
                    <div class="col-lg-12">
                        <p>Copyright &copy;2016. University of Nigeria, Nsukka. All Rights Reserved.</p>
                    </div>
                </div>
            </footer>

        </div>
    </div>
    <!--side bar menu ends-->	  
</body>

</html>

