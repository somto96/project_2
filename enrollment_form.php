<?php
require('portaldb.php');
$firstname = require_admin_login();
if (!isset($_POST['regnumber'])
        && !isset($_SESSION['regnumber'])) {
    // if any of the values above are not set
    // go back to begin_enrollment.php 
    // and ensure that they are supplied
    header("Location: begin_enrollment.php");
    die();
} else if (!isset($_POST['department'])) {
    $state = get_name('state', $_POST['state']);
    $faculty = get_name('faculty', $_POST['faculty']);
    $departments = get_departments($_POST['faculty']);
    $lgas = get_lgas($_POST['state']);

    if ($faculty) {
        $regnumber = $_POST['regnumber'];
        $_SESSION['regnumber'] = $regnumber;
    } else {
        echo 'Unknown faculty';
        header("Location: begin_enrollment.php");
        die();
    }
} else {
    $regnumber = $_SESSION['regnumber'];
    $surname = $_POST['surname'];
    $firstname = $_POST['firstname'];
    $othernames = $_POST['othernames'];
    $department = $_POST['department'];
    $level = $_POST['level'];
    $lga = $_POST['lga'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    
    if (enroll_student($regnumber, $department, $level, 
            $surname, $firstname, $othernames,
            $lga, $phone, $email, $address)) {
        $_SESSION['student_name'] = $surname . ', ' 
                . $firstname . ' ' . $othernames;
        $_SESSION['student_reg'] = $regnumber;
        $_SESSION['student_dept'] = get_name('department', $department);
        header("Location: enroll-success.php");
    } else {
        $error = "Enrollment failed";
    }
}
?>

<!--HTML CODES-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Enrollment form | UNN Portal</title>

        <!-- External CSS links-->
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/style.css" rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href="css/my_button.css"/>

        <!--External JS links-->
        <script src="js/jquery.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- Embedded CSS codes-->
        <style>
            body{background-color:#ffffff;}
            footer{
                background-color: green;
                margin-top:  -9px;
                background-position: fixed;
                margin-bottom: 0px;
            }
            .btn-outline{
                background:none;
                padding:12px 22px;
                border: 2px solid green;
                color:green;
                position: left;

            }
            .btn-outline:hover{
                color:white;
                background-color:green;
            }
            .profile-sidebar{
                padding: 20px 0 10px 0;
                background: #ccffcc;
                position: relative; 
                border-width: 10px;
                /*z-index: 1030;*/
                min-height: 1000px;
                min-width: 10px;
                max-width: 400px;
                margin-bottom: 10px;
                margin-top: 51px;
            }
            .profile-userpic img{
                float: none;
                margin: auto;
                width: 30%;
                height: 30%;
                -webkit-border-radius:50%!important;
                -moz-border-radius:50%!important;
                border-radius:50%!important;
            }
            .profile-usertitle{
                text-align: center;
                margin-top: 20px;
            }
            .profile-usertitle-name{
                color: green;
                font-size: 16px;	
                font-weight: 600;
                margin-bottom: 7px;
            }
            .profile-usermenu ul li{
                border-bottom: 1px solid green;
            }
            .profile-usermenu ul li:last-child{
                border-bottom: none;
            }
            .profile-usermenu ul li a{
                color:green;
                font-size: 14px;
                font-weight: 400;
            }
            .profile-usermenu ul li a:hover{
                background-color: green;
                color:blue;
            }
            .profile-usermenu ul li.active{
                border-bottom: none;
            }
            .profile-usermenu ul li.active a{
                color:black;
                border-left: 2px solid green;
                margin-left: 2px;
            }
            .caret{
                width: 0;
                height: 0;
                border-left: 4px solid green;
                border-right: 4px solid white;
                border-bottom: 4px solid;
                display: inline-block;
                margin-left: 2px;
            }
            .passport img{
                float: none;
                margin: auto;
                width: 18%;
                height: 10%;
            }
            .form-Enroll {
                margin-top: 100px;
            }
        </style>
        <!--Embedded CSS codes ends here-->

    </head>
    <body>
        <?php require('admin_navbar.php'); ?>
        <div class="container-fluid">
            <div class="row profile">
                <?php require('admin_sidebar.php'); ?>
                <!-- Code for side nav bar ends here-->

                <!-- Code for enrollment form begins here-->
                <div class="col-md-6 slideInRight" style="background-color:white;">

                    <form class="form-Enroll" action="" method="POST">
                        <h2 class="form-signin-heading" style="text-align:center;">UNIVERSITY OF NIGERIA, NSUKKA</h2><br/>
                        <h4 class="form header" style="text-align:center;"> Enrollment Form </h4><br/>
                        <div class="passport">
                            <input type="file" name="imageUpload" id="imageUpload">
                        </div><br/>
                        <legend>Personal details</legend>
                        <fieldset>
                            <?php                            
                            if (isset($error)) {
                                echo "<div class='text-danger'>$error</div>";
                            }
                            ?>
                            <?php input_field('surname', 'Surname', 'required') ?>
                            <?php input_field('firstname', 'First name', 'required') ?>
                            <?php input_field('othernames', 'Other names', 'required') ?>
                            <?php input_field('regnumber', 'Reg. number', "disabled value=$regnumber") ?>
                            <?php input_field('faculty', 'Faculty', "disabled value=$faculty") ?>
                            <?php select_field('department', 'Department', 7, $departments) ?>
                            <?php input_field('state', 'State', "disabled value=$state") ?>
                            <?php select_field('lga', 'LGA', 6, $lgas) ?>
                            <?php input_field('address', 'Address', 'required') ?>
                            <?php input_field('phone', 'Phone', 'required') ?>
                            <?php input_field('email', 'Email address', 'required') ?>

                            <div class="form-group row">
                                <label for="inputlevel" class="col-sm-3 col-form-label">Level:</label>
                                <div class="col-sm-3">
                                    <select class="form-control" id="inputlevel" name="level">
                                        <option value="1">100</option>
                                        <option value="2">200</option>
                                        <option value="3">300</option>
                                        <option value="4">400</option>
                                        <option value="5">500</option>
                                    </select></p><br/>
                                </div>	
                            </div>

                            <button type="submit" class="btn btn-outline success">Enroll Student
                                <span class="glyphicon glyphicon-hand-right" aria="true"></span>
                            </button>
                        </fieldset>
                    </form>
                </div>
                <!-- Code for enrollment form ends here-->
            </div>

            <!-- code for footer of the page-->
            <footer>
                <div class="row" style="text-align: center; margin: 0px 0px">
                    <div class="col-lg-12">
                        <p>Copyright &copy;2016. University of Nigeria, Nsukka. All Rights Reserved.</p>
                    </div>
                </div>
            </footer>
        </div>
        <!--side bar menu ends-->	
    </body>
</html>


