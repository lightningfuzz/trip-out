<?php
    require_once("../Controllers/DestinationController.php");
    require_once("../Models/Destination.php");
    require_once("../Controllers/AccountController.php");
    require_once("../Models/RegisteredUser.php");
    require_once("../Session/Session.php");
    
    $s = Session::getInstance();
    $s->start();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['user'];
        $password = $_POST['userpassword'];
        //reverse logifc for isUsernameValid: see AccountController
        //check if user exists
        try{
            $result = AccountController::login($username, $password);
            header('Location: ../index.php');
            exit;
         }
        catch(LoginException $e){
            echo $e;
            exit;
        }
        
        catch(AccountException $e){
            echo $e . $e;
            exit;
        }
    }?>

<!DOCTYPE html>
<html>
    <head>
        <!--<link rel ="stylesheet" type ="text/css" href ="../css/bootstrap.css"> -->
        <link rel ="stylesheet" type ="text/css" href ="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap-responsive.css">
        <script src="../js/bootstrap.js"></script>
        <script src="../js/script.js"></script>
        <script src="../js/jquery.js"></script>
        <link rel ="stylesheet" type ="text/css" href ="../css/custom">
        <!-- Add jQuery library -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    

        <title>Sign In</title>
    </head>
    <body>
        <nav class="navbar navbar-inverse" role="navigation">
            <a class="navbar-brand" href="" id ="logo">TRIP OUT!</a>
            <ul class="nav navbar-nav">
                <li name = "home" class="active"><a href="">Home</a></li>
                <li><a href="Views/reviewSearch.php">Write a Review</a></li>
                <li><a href="Views/createDestination.php">Create a Destination</a></li>
                <li><a href="Views/about.html">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <a type="submit" class="btn btn-default" href="Views/signIn.php" id ="signInButton">Sign In</a>
                <a type="submit" class="btn btn-default" href="Views/signUp.php" id ="registerButton">Register</a>
            </form>
        </nav>

        <div class="row">
            <div class="span5">
                <h3>Sign In</h3>
                <p>
                <form name="logon" id="logon" action="signIn.php" method="POST" >
                    Username: <input type="text" name="user"><br>
                    Password: <input type="password" name="userpassword" id="userpassword"><br>
                    <div class="btn-group">
                    <input class="btn btn-primary" type="submit" value="Sign In">
                    </div>
                </form>
                </p>
            </div>
            <div class ="span5">
                <h3>Haven't Tripped Out?</h3>
                <div class="btn-group">
                    <a href="#" class="btn btn-primary" id="registerGoButton">
                        Register Now
                    </a>
                </div>
            </div>
        </div>

<!--         jQuery to load signUp.php page into mainContent div of index.php -->
        <script>
            $('#registerGoButton').on("click",function(){
                $('div.row').parent().load('Views/signUp.php');
            });
        </script>
    </body>
</html>