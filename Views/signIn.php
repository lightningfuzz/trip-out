<html>
    <head>
        <title>TRIP OUT! - Sign In</title>    
        <!--<link rel ="stylesheet" type ="text/css" href ="../css/bootstrap.css"> -->
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
        <div class="container">
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
            <div class="row">
                <div class="span5">
                    <h3>Sign In</h3>
                    <p>
                    <form name="logon" action="index.php" method="POST" >
                        Username: <input type="text" name="user"><br>
                        Password: <input type="password" name="userpassword"><br>
                        <div class="btn-group">
                        <a href="../index.php" class="btn btn-primary" id="signInButton">
                            Sign In
                        </a>
                        </div>
                        <!-- <input class="btn btn-primary" type="submit" id="editButton" value="Sign In"> -->
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
            <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
                <div class ="footer">
                    SFSU-FAU-FULDA joint SW Engineering Project Fall 2013
                </div>
            </nav>
        </div>
    </body>
</html>

