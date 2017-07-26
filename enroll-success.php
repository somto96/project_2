<?php
require('portaldb.php');
$firstname = require_admin_login();
$name = $_SESSION['student_name'];
$regnumber = $_SESSION['student_reg'];
$department = $_SESSION['student_dept'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Enrollment Successful | UNN Portal</title>

        <!--External CSS codes-->
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/style.css" rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href="css/enroll.css"/>

        <!--External JS codes-->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </head>
    <body>
        <?php require('admin_navbar.php'); ?>
        <!--code for side bar navigation starts here-->
        <div class="container-fluid">
            <div class="row profile">
                <?php require('admin_sidebar.php'); ?>
                <div class="col-md-4" style="margin-top: 120px">
                    <div class="alert alert-success">Enrollment Successful</div>
                    <p><b>Name</b>: <?php echo $name; ?></p>
                    <p><b>Registration Number</b>: <?php echo $regnumber; ?></p>
                    <p><b>Department</b>: <?php echo $department; ?></p>
                </div>
            </div>
            <?php require('footer.php') ?>
        </div>
        <!--side bar menu ends-->			
    </body>
</html>


