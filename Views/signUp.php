<html>
    <head>
        <!-- BEGIN BANNER -->
        <title>TRIP OUT!</title>    
        <!-- <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap.css"> -->
        <link rel ="stylesheet" type ="text/css" href ="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap-responsive.css">
        <link rel ="stylesheet" type ="text/css" href ="../css/index.css">
        <script src="../js/bootstrap.js"></script>
        <script src="../js/script.js"></script>
        <script src="../js/jquery.js"></script>
        <!-- Add jQuery library -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    </head>  
    <body> 
        <!-- BEGIN CONTAINER -->
        <div class="container">
            <!-- BEGIN BANNER -->
            <nav class="navbar navbar-inverse" role="navigation">
                <a class="navbar-brand" href="../index.php">TRIP OUT!</a>
                <ul class="nav navbar-nav">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="reviewSearch.php">Write a Review</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
                <form class="navbar-form navbar-right">
                    <a type="submit" class="btn btn-default" href="signIn.php">Sign In</a>
                    <a type="submit" class="btn btn-default" href="signUp.php">Register</a>
                </form>
            </nav>
            <!-- END BANNER -->       
            <div class="row" align="center">
                <!-- <div class="span6"> -->
                    <div align="center" style="border:2px solid; border-radius:25px; display: block;
                      text-align: center; float: center; width: 30%; height: 65%">
                       <h3>Sign Up</h3>
                       <form class="form-horizontal" name="logon" action="index.php" method="POST" >
                           <div class="control-group">
                               <label class="control-label" for="inputUsername">Username:</label>
                                   <div class="controls">
                                       <input type="text" id="inputUsername" placeholder="username">
                                   </div>
                           </div>
                           <div class="control-group">
                               <label class="control-label" for="inputEmail">Email:</label>
                                   <div class="controls">
                                       <input type="text" id="inputEmail" placeholder="email">
                                   </div>
                           </div>
                           <div class="control-group">
                               <label class="control-label" for="inputPassword">Password:</label>
                                   <div class="controls">
                                       <input type="text" id="inputPassword" placeholder="password">
                                   </div>
                           </div>
                           <div class="control-group">
                               <label class="control-label" for="confirmPassword">Confirm Password:</label>
                                   <div class="controls">
                                       <input type="text" id="confirmpassword" placeholder="confirm password">
                                   </div>
                           </div>
                           <br>
                           <a href="#" class="btn btn-primary" id="signUpButton">
                           Register Now
                           </a>
                       </form>
                    </div>
                <!-- </div> -->
            </div>
            <!-- BEGIN FOOTER-->
            <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
                <div class ="footer">
                    SFSU-FAU-FULDA joint SW Engineering Project Fall 2013
                </div>
            </nav>
            <!-- END FOOTER -->
        </div>
        <!-- END CONTAINER-->
    </body>
</html>
       


