<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>UNNportal||confirmpassword</title>

		<!--External CSS links-->
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
		<link href="css/reset2.css" rel="stylesheet"/>
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine"/>

		  <!--JS-->
		 <script src="js/jquery.js"></script>
		 <script src="../js/jquery-1.11.3.js"></script>
		 <script src="js/bootstrap.min.js"></script>
		 <script src="../nprogress-master/nprogress-master/nprogress.js"></script>	

		<style>
		 	h1 {
					font-family: "Tangerine", serif;
					font-size: 48px;	
				}
		</style>
	</head>

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
					<a class="navbar-brand" href="http://unn.edu.ng/">UNIVERSITY OF NIGERIA</a> <!-- this particular code controls the logo-->
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
									            <li>
									            	<a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i>UNN Mail</i></a>
									            </li>
                                            </ul>
						</li>
					</ul>
				</div>
				<!-- code for NAVBAR CONTENTS ends here-->
			</div>

		</nav> 
 		</div>
 		<!--code for side bar navigation starts here-->
	 	<div class="container">
	 		<div class="jumbotron jumbotron-fluid">
	 		<h1 class="display-3" style="text-align:center;"><strong>STEP 2 </strong></h1>
		 				<div class="row" align="center">
				 				<div class="col-lg-12 slideInRight" style="background-color:white;">
					 				<form class="form-Enroll" action="" method="POST">
						 				<legend>Reset Password</legend>
						 						<fieldset>
										 						<div class="form-group row">
														        	<label for="inputnewpassword" class="col-sm-2 col-form-label">Password: </label>
														        	<div class="col-sm-5">
														        		<input type="password" class="form-control" id="inputnewpassword" placeholder="New Password" required>
														        	</div>
														        </div><br/>
														        <div class="form-group row">
														        	<label for="inputre-password" class="col-sm-2 col-form-label"> Confirm password: </label>
														        	<div class="col-sm-5">
														        		<input type="password" class="form-control" id="inputre-password" placeholder="Re-Password" required>
														        	</div>
														     	</div>

														        <button type="button" class="btn btn-outline success" > <a href="studentlogin.php">Confirm</a>
														     	 	<span class="glyphicon glyphicon-hand-right" aria="true"></span>
														     	</button>
												</fieldset>	
									</form>	
								</div>
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
				 	
	 		</div>
	 	</div>
		<!--side bar menu ends-->	  
	</body>
	
</html>

						