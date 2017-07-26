<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>UNN Portal</title>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href="css/my_button.css"/>

        <!--External JS codes-->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="engine2/wowslider.js"></script>
        <script type="text/javascript" src="engine2/script.js"></script>

        <!-- WOWslider -->
        <script type="text/javascript" src="engine0/jquery.js"></script>
        <link rel="stylesheet" type="text/css" href="engine0/style.css" />
        <link rel="stylesheet" type="text/css" href="engine1/style.css" />
        <link rel="stylesheet" type="text/css" href="engine2/style.css" />
    </head>
    <body style="background: #fff">
            <!--code for navigation bar starts here-->
            <nav class="navbar navbar-inverse navbar-static-top" 
                 role="navigation" style="margin:0px; background-color:green;">
                <!-- to add functionality to the nav bar-->
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed"
                                data-toggle="collapse"
                                data-target="#bs-Departments-navbar-collapse-1" aria-expanded="false">
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
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">CONTACT US</a></li>
                            <li><a href="adminlogin.php">ADMIN</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" 
                                   data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">
                                    Account<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu"> 
                                    <li><a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i>UNN Mail</i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> 
        </div>

        <div class="container">
            <!-- code for slider -->
            <div id="wowslider-container2">
                <div class="ws_images"><ul>
                        <li><a href="http://wowslider.com"><img src="data2/images/adminbuilding.jpg" alt="wowslider" title="Admin-Building" id="wows2_0"/></a></li>
                        <li><img src="data2/images/unngatei.jpg" alt="UNN-gate-I" title="UNN-gate-I" id="wows2_1"/></li>
                    </ul></div>
                <div class="ws_bullets"><div>
                        <a href="#" title="Admin-Building"><span><img src="data2/tooltips/adminbuilding.jpg" alt="Admin-Building"/>1</span></a>
                        <a href="#" title="UNN-gate-I"><span><img src="data2/tooltips/unngatei.jpg" alt="UNN-gate-I"/>2</span></a>
                    </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">bootstrap slider</a> by WOWSlider.com v8.7</div>
                <div class="ws_shadow"></div>
            </div>	

            <!-- End -->


            <!--code for student portal starts here-->
            <div class="row" style= "text-align: center;">
                <div class="col-lg-12 wow slideInRight" style="background-color:white;visibility: visible; 
                     animation-name: slideInRight;">
                    <h1>STUDENT'S PORTAL</h1>
                    <p>Follow all the given instructions <b>CAREFULLY</b></p>
                    <a href="studentlogin.php" class="btn btn-lg btn-success">LOG IN</a>
                    <!--code for footer-->
                    <footer>

                        <div class="row" style="background-color:white; text-align: center; margin: 20px 20px">
                            <div class="col-lg-12">
                                <p>Copyright &copy;2016. University of Nigeria, Nsukka. All Rights Reserved.</p>
                            </div>
                        </div>
                    </footer>
                    <!--ends here-->
                </div>


            </div>

    </body> 
</html>

