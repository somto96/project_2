<!--PHP codes-->

<?php
ob_start();
session_start();
require("portaldb.php");
unset($_SESSION['student_id']);
unset($_SESSION['student_fullname']);
unset($_SESSION['student_firstname']);
unset($_SESSION['student_regnumber']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['regnumber']) && isset($_POST['password'])) {
        $regnumber = $_POST['regnumber'];
        $password = $_POST['password'];
        $student = student_login($regnumber, $password);

        if ($student) {
            $fullname = $student['surname'] . ' ' . $student['firstname'];
            $_SESSION['student_firstname'] = $student['firstname'];
            $_SESSION['student_regnumber'] = $regnumber;
            $_SESSION['student_fullname'] = $fullname;
            $_SESSION['student_id'] = $student['id'];
            header("Location: studentportal.php");
            die();
        } else {
            $error = "Your Username or Password is invalid";
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Student Login | UNN Portal</title>

        <!--External CSS links-->
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/my_button.css" rel="stylesheet"/>

        <!--External JS Links-->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </head>

    <body>
        <!--img src="images/Admin-Building.jpg" alt="image" class="img-responsive"-->
        <!--code for navigation bar starts here-->
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin:0px; background-color:green;"> <!-- to add functionality to the nav bar-->
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-Departments-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><!--img src="images/download.jpg" class="img-responsive"-->UNIVERSITY OF NIGERIA</a> <!-- this particular code controls the logo-->
                </div>
                <!-- Codes for NAVBAR CONTENTS--> 
                <!-- please note if the dropdown does not work try downloading a new jquery documentation file-->

                <div class="collapse   navbar-collapse navbar-right " id="bs-Departments-navbar-collapse-1">
                    <ul class="nav navbar-nav nav-tabs">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span></a>
                            <ul class="dropdown-menu"> 
                                <li><a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i>UNN Mail</i></a></li>
                                <li><a href="resetpassword.php"><i>Reset password?</i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- code for NAVBAR CONTENTS ends here-->
            </div>
            <!--<a class="btn btn-price" href="#">BUY NOW</a>-->
        </nav> 
    </div>
    <!--code for admin portal starts here-->

    <div class="container">
        <div class="jumbotron jumbotron-fluid">
            <h1 class="display-3" style="text-align:center;"> Student's panel </h1>
            <p class="lead">Please fill in the required information</p>
            <div class="row">
                <div class="col-md-6 slideInleft" style="background-color:white;visibility: visible; animation-name: slideInRight;">
                    <img src="images/student2.jpg" alt="image" class="img-responsive">
                </div>
                <div class="col-md-6 slideInRight" style="visibility: visible; animation-name: slideInRight;">
                    <form class="form-signin" action="" method="POST">
                        <h2 class="form-signin-heading" style="color:green;">SIGN IN</h2>
                        <label for="inputregnumber"><h5>Registration Number</h5></label>
                        <label for="inputregnumber" class="sr-only">Registration number</label>
                        <input id="inputregnumber" type="text" name="regnumber"
                               class="form-control" placeholder="Registration number" required autofocus/>
                        
                        <label for="inputPassword"><h5>Password</h5></label>
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" name="password"
                               class="form-control" placeholder="Password" required>
                        
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <div>
                            <?php
                            if (isset($error)) {
                                echo '<div class="text-danger">' . $error . '</div>';
                            }
                            ?>
                        </div>
                        <button type="submit" class="btn btn-outline success">LOG IN</button>
                    </form>
                </div>

            </div>

        </div>	
        <footer>

            <div class="row" style="background-color:white; text-align: center; margin: 0px 0px">
                <div class="col-lg-12">
                    <p>Copyright &copy;2016. University of Nigeria, Nsukka. All Rights Reserved.</p>
                </div>
            </div>
        </footer>

        <!--code for admin portal ends here-->

</body>
</html>

