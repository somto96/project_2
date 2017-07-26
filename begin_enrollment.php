<?php
require('portaldb.php');
$firstname = require_admin_login();
$faculties = get_faculties();
$states = get_states();
?>

<!--HTML CODES-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>UNNportal||Enrollment form</title>

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
                margin-top: 951px;
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
                min-height: 900px;
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

                    <form class="form-Enroll" action="enrollment_form.php" method="POST">
                        <h2 class="form-signin-heading" style="text-align:center;">UNIVERSITY OF NIGERIA, NSUKKA</h2>
                        <h4 class="form header" style="text-align:center;"> Enrollment Form </h4>
                        <legend>Personal details</legend>
                        <fieldset>
                            <?php input_field('regnumber', 'Reg. number', true) ?>
                            <?php select_field('faculty', 'Faculty', 6, $faculties) ?>
                            <?php select_field('state', 'State of Origin', 6, $states) ?>

                            <button type="submit" class="btn btn-outline success">Begin Enrollment
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


