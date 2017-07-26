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
        <div class="profile-usermenu">
            <ul class="nav">
                <li class="active">
                    <a href="adminportal.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>  Home</i></a>
                </li>
                <li class="active">
                    <a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Profile</a>
                </li>
                <li class="active dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list" aria-hidden="true"></span>  Enrollment<span class="caret"></span></a>
                          <ul class="dropdown-menu dropdown-menu-right"> 
                                <li><a href="begin_enrollment.php">Enrollment Form</a></li>
                                 <li><a href="#">Biometric capture</a></li>
                            </ul>
                        </li>
                    
                </li>
                <li class="active">
                    <a href="#"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>  Exams Verification</a>
                </li>
                <li class="active">
                    <a href="#"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>  Exam schedule</a>
                </li>
                <li class="active dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>  Account<span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right"> 
                        <li><a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i>UNN Mail</i></a></li>
                    </ul>
                </li>
                <li class="active">

                    <a href="#"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>  E-library</a>
                </li>
                <li class="active">
                    
                    <a href="adminlogin.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>  Sign Out</a>
                </li>
            </ul>
             <h6 style="text-align:center;">Note all admins have restricted rights based on allocation of tasks and priviledges</h6>
        </div>
    </div>
</div>