<?php

    require_once '../Session/Session.php';
    require_once '../Controllers/AccountController.php';

    $s = Session::getInstance();
    $s->start();
    if(AccountController::isLogin()){
        $user = AccountController::getLoggedinUser();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && array_key_exists('logout', $_POST)) {
        AccountController::logout();
    }
?>

<html>
    <head>
        <title>TRIP OUT!</title>    
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap.css">
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap-responsive.css"> 
        <link rel ="stylesheet" type ="text/css" href ="../css/index.css">
        <script src="../js/bootstrap.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class ="container">
        <nav class="navbar navbar-inverse" role="navigation">
            <a class="navbar-brand" href="../index.php" id ="logo">TRIP OUT!</a>
            <ul class="nav navbar-nav">
                <li><a href="../index.php">Home</a></li>
                <li><a href="reviewSearch.php">Write a Review</a></li>
                <li><a href="createDestination.php">Create a Destination</a></li>
                <li class ="active"><a href="">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
            <?php if (AccountController::isLogin()): ?>
                <form class = "navbar-form navbar-right" style ="color:white;" action ="../index.php" method="post">
                    Hello, <?php echo $user->getUserName(); ?> | 
                    <input class = "btn btn-default" type="submit" name = "logout" value ="logout"></input>
                </form>
             <?php else: ?>
                <form class="navbar-form navbar-right">
                    <a type="submit" class="btn btn-default" href="signIn.php" id ="signInButton">Sign In</a>;
                    <a type="submit" class="btn btn-default" href="signUp.php" id ="registerButton">Register</a>;
                </form>;
            <?php endif ?>
        </nav>
        <h3>About Us</h3><hr>
        San Francisco State University<br>
        Computer Science <br>
        CSC 640: Software Engineering, Fall 2013<br>
        Instructors: Dr. Petkovic & Marc Sosnick<hr>
        <strong>TEAM:</strong><br>
        Michael Santer, Team Manager<br>
        Marcian Diamond<br>
        Jung Kim<br>
        Matt Rutherford<br>
        Aye Khine<br>
        Deon Shum<br>
        Rob Pennock
        <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
            <div class ="footer">
                SFSU-FAU-FULDA joint SW Engineering Project Fall 2013 
            </div>
        </nav>
        </div>
        <!-- END CONTAINTER -->
    </body>
</html>