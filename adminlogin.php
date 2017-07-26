<!--PHP codes-->
		
		<?php 
			ob_start();
			@session_start();
			require("portaldb.php");
			unset($_SESSION['username']);
			unset($_SESSION['password']);
			
			if($_SERVER["REQUEST_METHOD"] == "POST") {
				if(isset($_POST['username']) && isset($_POST['password'])) {
					$user = $_POST['username'];
					$pass = $_POST['password'];

					$admin = admin_login($user, $pass);
					
			    	if($admin) {
				        $_SESSION['admin_id'] = $admin['id'];
				        $_SESSION['admin_name'] = $admin['firstname'];
				        header("Location: adminportal.php");
				        die();
					} else {
			        	$_SESSION['error'] = "Your Username or Password is invalid";
			  		}
				}
		   }
		?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>UNNportal/adminlogin</title>
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
		<link rel="stylesheet" type="text/css" href="css/my_button.css"/>
		<!--CSS codes ends here-->

		<!--JS links-->
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<!--code for admin portal starts here-->
	<body>
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
					<a class="navbar-brand" href="http://unn.edu.ng/">
						UNIVERSITY OF NIGERIA</a> <!-- this particular code controls the logo-->
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
		</nav>
		<!--code for navigation bar ends here-->
 		</div>
	 	<div class="container">
                    <div class="jumbotron jumbotron-fluid">
                            <h1 class="display-3" style="text-align: center;">Admin panel</h1>
                            <p class="lead">Please adhere to the instructions carefully</p>
                            <div class="row">
                                    <div class="col-md-6 slideInleft" style="background-color:white;visibility: visible; animation-name: slideInRight;">
                                            <img src="images/Admin-Building.jpg" alt="image" class="img-responsive">
                                    </div>

                                    <div class="col-md-6 slideInRight" style="background-color:white;visibility: visible; animation-name: slideInRight;">	
                                    <form class="form-signin" action="" method="POST">
                                                    <h2 class="form-signin-heading" style="font-color:green;">SIGN IN</h2>
                                                    <label for="username"><h5>Username</h5></label>
                                                    <label for="inputusername" class="sr-only">Username</label>
                                                    <input name="username" type="Username" id="inputusername" class="form-control" placeholder="Username" required autofocus>
                                                    <label for="Password"><h5>Password</h5></label>
                                                    <label for="inputPassword" class="sr-only">Password</label>
                                                    <input  name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                                    <div class="checkbox">
                                                      <label>
                                                        <input type="checkbox" value="remember-me"> Remember me
                                                      </label>
                                                    </div>
                                                    <div>
                                                            <?php

                                                                    if(isset($_SESSION['error'])) {

                                                                            $error = $_SESSION['error'];
                                                                            echo '
                                                                                    <div class="text-danger">'.$error.'</div>
                                                                            ';
                                                                            unset($_SESSION['error']);

                                                                    }

                                                            ?>
                                                    </div>
                                                     <button type="submit" class="btn btn-outline success">LOG IN</button>
                                                 </form>
                                </div>
                        </div>
                    </div>
                </div>
		 <!--code for footer begins here-->
		<footer>
                    <div class="row" style="background-color:white; text-align: center; margin: 0px 0px">
                        <div class="col-lg-12">
                            <p>Copyright &copy;2016. University of Nigeria, Nsukka. All Rights Reserved.</p>
                        </div>
                    </div>
                </footer>
	
	</body>
        <!--code for admin portal ends here-->
</html>


						