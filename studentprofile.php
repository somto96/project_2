<?php
require('portaldb.php');
require_student_login();
$firstname = $_SESSION['student_firstname'];
$student = get_student($_SESSION['student_id']);

$surname = $student['surname'];
$regnumber = $student['regnumber'];
$othernames = $student['othernames'];
$email = $student['email'];
$phone = $student['phone'];
$address = $student['address'];
?>

<!--HTML CODES-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Student Profile | UNN Portal</title>

        <!-- External CSS links-->
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/profile.css" rel="stylesheet"/>

        <!--External JS links-->
        <script src="js/jquery.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- Embedded CSS codes-->
        <style>
           
            .form-Enroll {
                margin-top: 100px;
            }
        </style>
        <!--Embedded CSS codes ends here-->

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
            <!-- Code for side nav bar ends here-->

            <!-- Code for enrollment form begins here-->
            <div class="col-md-6 slideInRight" style="background-color:white;">

                <form class="form-Enroll" action="" method="POST">
                    <h2 class="form-signin-heading" style="text-align:center;">UNIVERSITY OF NIGERIA, NSUKKA</h2><br/>
                    <h4 class="form header" style="text-align:center;"> BIO-DATA </h4><br/>
                    <div class="passport">
                        <input type="file" name="imageUpload" id="imageUpload">
                    </div><br/>
                    <legend>Personal details</legend>
                    <fieldset>
                        <div class="form-group row">
                            <label for="inputsurname" class="col-sm-2 col-form-label">Surname:</label>
                            <div class="col-sm-10">
                                <input type="surname" class="form-control" id="inputsurname" placeholder="Surname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputfirstname" class="col-sm-2 col-form-label">Firstname:</label>
                            <div class="col-sm-10">
                                <input type="firstname" class="form-control" id="inputfirstname" placeholder="Firstname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputothernames" class="col-sm-2 col-form-label">Othernames:</label>
                            <div class="col-sm-10">
                                <input type="othernames" class="form-control" id="inputothernames" placeholder="Othernames">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputregistrationnumber" class="col-sm-2 col-form-label">Registration number:</label>
                            <div class="col-sm-10">
                                <input type="registrationnumber" class="form-control" id="inputregistrationnumber" placeholder="Registration number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputentry" class="col-sm-2 col-form-label">Entry:</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="col-sm-2 col-form-label">
                                    <option value="UTME">UTME</option>
                                    <option value="DIRECTENTRY">DIRECT ENTRY</option>
                                </select></p><br/>
                            </div>	
                        </div>
                        <div class="form-group row">
                            <label for="dateofbirth" class="col-sm-2 col-form-label">Date of birth</label>
                            <div class="col-sm-4">
                                <input id="departure"  class="form-control" type="date" name="Birth"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputemailaddress" class="col-sm-2 col-form-label">Email address:</label>
                            <div class="col-sm-10">
                                <input type="emailaddress" value="" class="form-control" id="inputemailaddress " placeholder="Email address">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputfaculty" class="col-sm-2 col-form-label">Faculty:</label>
                            <div class="col-sm-10">
                                <input type="faculty" value="" class="form-control" id="inputfaculty" placeholder="Faculty">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputdepartment" class="col-sm-2 col-form-label">Department:</label>
                            <div class="col-sm-10">
                                <input type="department" class="form-control" id="inputdepartment" placeholder="Department">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputgender" class="col-sm-2 col-form-label">Level:</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="col-sm-2 col-form-label">
                                    <option value="100">100</option>
                                    <option value="100">200</option>
                                    <option value="100">300</option>
                                    <option value="100">400</option>
                                    <option value="100">500</option>
                                </select></p><br/>
                            </div>	
                        </div>
                        <div class="form-group row">
                            <label for="inputresidentialaddress" class="col-sm-2 col-form-label">Residential address:</label>
                            <div class="col-sm-10">
                                <input type="residentialaddress" class="form-control" id="inputresidentialaddress " placeholder="Residential address">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputphonenumber" class="col-sm-2 col-form-label">Phone number:</label>
                            <div class="col-sm-10">
                                <input type="phonenumber" class="form-control" id="inputphonenumber" placeholder="Phone number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputgender" class="col-sm-2 col-form-label">Gender:</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="col-sm-2 col-form-label">
                                    <option value="MALE">MALE</option>
                                    <option value="FEMALE">FEMALE</option>
                                </select></p><br/>
                            </div>	
                        </div>


                        <div class="form-group row">
                            <label for="inputstateoforigin" class="col-sm-2 col-form-label">State of Origin:</label>
                            <div class="col-sm-10">
                                <input type="stateoforigin" class="form-control" id="inputstateoforigin" placeholder="State of Origin">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputl.g.a" class="col-sm-2 col-form-label">L.G.A:</label>
                            <div class="col-sm-10">
                                <input type="l.g.a" class="form-control" id="inputl.g.a" placeholder="L.G.A">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Programme:</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="col-sm-2 col-form-label">
                                    <option value="UNDERGRADUATE">UNDERGRADUATE</option>
                                    <option value="SANDWICH">SANDWICH</option>
                                </select></p><br/>
                            </div>	
                        </div>
                        <button type="button" class="btn btn-outline success">Submit
                            <span class="glyphicon glyphicon-hand-right" aria="true"></span>
                        </button>
                    </fieldset>
                </form>
            </div>
            <!-- Code for enrollment form ends here-->

            <!-- code for footer of the page-->
            <footer>

                <div class="row" style="text-align: center; margin: 0px 0px">
                    <div class="col-lg-12">
                        <p>Copyright &copy;2016. University of Nigeria, Nsukka. All Rights Reserved.</p>
                    </div>
                </div>
            </footer>
            <!--code for footer ends here-->
        </div>
    </div>
    <!--side bar menu ends-->	
</body>
</html>


