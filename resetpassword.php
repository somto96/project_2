<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>UNNportal||resetpassword</title>

		<!--External CSS links-->
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
		<link href="css/my_button.css" rel="stylesheet"/>
		<link href="css/reset1.css" rel="stylesheet"/>
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine"/>

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
	 		<div class="container">
	 			<div class="jumbotron jumbotron-fluid">
	 				<h1 class="display-3" style="text-align:center;"><strong>STEP 1 </strong></h1>
		 				<div class="row">
		 					<div class="col-md-6 slideInleft" style="background-color:white;visibility: visible; animation-name: slideInRight;">
	 							<img src="images/reset1.jpg" alt="image" class="img-responsive">
	 						</div>
			 				<div class="col-md-6 slideInRight" style="background-color:white;">
				 				<form class="form-Enroll" action="resetpassword2.php" method="POST">
					 							<legend>Insert E-mail</legend>
					 								<fieldset>
									 						<div class="form-group row">
													        	<label for="inputemail" class="col-sm-2 col-form-label">Email:</label>
													        	<div class="col-sm-10">
													        		<input type="inputemail" class="form-control" id="inputemail" placeholder="Insert Email" required>
													        		 <div class="checkbox">
															          	<label>
															           	 	<input type="checkbox" value="remember-me"> Is it a valid e-mail address
															          	</label>
															     	</div>
													        	</div>
													        </div>
													        <button type="button" class="btn btn-outline success" ><a href="resetpassword2.php">Verify </a>
													     	 	<span class="glyphicon glyphicon-hand-right" aria="true"></span>
													     	</button>
													</fieldset>	
								</form>	
							</div>
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