<?php
	require('portaldb.php');
	$firstname = require_admin_login();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>UNNportal/Adminportal</title>

		<!--External CSS codes-->
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
		<link href="css/style.css" rel="stylesheet"/>
		<link rel="stylesheet" type="text/css" href="css/adminportal.css"/>

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
	 			<?php require('footer.php') ?>
	 		</div>
	 	</div>
		<!--side bar menu ends-->			
	</body>
</html>

						