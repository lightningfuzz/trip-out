<html>
    <head>
        <title>TRIP OUT!</title>    
        <!--<link rel ="stylesheet" type ="text/css" href ="../css/bootstrap.css"> -->
        <link rel ="stylesheet" type ="text/css" href ="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap-responsive.css">
        <script src="../js/bootstrap.js"></script>
        <script src="../js/script.js"></script>
        <script src="../js/jquery.js"></script>
        <!-- Add jQuery library -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    </head>
    <body>
           <!-- BEGIN BANNER -->
        <div style ="background-color:black;">
            <img src="../media/assets/images/tripOutLogo.jpg"></img>
                <div class ="pull-right" style="padding-top:20px;color:white;">
                    Login: <input type="text" placeholder="username" name="tag" value="" />
                    <input type="password" placeholder="password" name="tag" value="" />
                    <br>
                        <div class="col-md-2" style="padding-top:5px;">
                            <button class ="btn btn-primary">Sign Up</button>
                        </div>
                        <div style = "text-align:right; float:right;padding-top:10px;padding-right:10px;">
                            <a href="" >forgot password?</a>
                        </div>
                </div>
            </div>
            <nav class="navbar navbar-inverse" role="navigation">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="../index.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Write a Review</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </nav>
            <!-- END BANNER -->
    <div class="container">
        <div class="row">
            <div class="span5">
                <h3>Sign In</h3>
                <p>
                <form name="logon" action="index.php" method="POST" >
                    Username: <input type="text" name="user"><br>
                    Password: <input type="password" name="userpassword"><br>

                    <input class="btn btn-primary" type="submit" id="editButton" value="Sign In">
                </form>
                </p>
                </div>
                <div class ="span5">
                <h3>Haven't Tripped Out?</h3>
                    <div class="btn-group">
                        <a href="signUp.php" class="btn btn-primary" id="registerButton">
                            Register Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

