<?php

    require_once '../Session/Session.php';
    require_once '../Controllers/AccountController.php';

    $s = Session::getInstance();
    $s->start();
    if(AccountController::isLogin()){
        $user = AccountController::getLoggedinUser();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['logout']) {
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
                <li><a href="../index.php" id="homeLink">Home</a></li>
                <li class="active"><a href="#" id ="writeReviewLink">Write a Review</a></li>
                <li><a href="createDestination.php">Create a Destination</a></li>
                <li><a href="about.php">About</a></li>
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
        <h3> Write a Review </h3> <br/>
        <p> Review a Destination (e.g., Attractions, Restaurants, Hotels, Events, All) you visited... </p>
        <br/> <br/>
        <div class="panel panel-default" style="width:75%;margin-left:auto;margin-right:auto;">
            <div class="panel-heading">What would you like to review?</div>
            <div class="panel-body" align="center">
                 <form action="reviewSearchResult.php" method="get" class="form-inline" role="form">
                <div style="padding-bottom:10px;">
                    <label class="checkbox-inline">
                        <input type="radio" id="inlineCheckbox5" name="type" value="0" checked> All
                    </label>
                    <label class="checkbox-inline">
                        <input type="radio" id="inlineCheckbox1" name="type" value="1"> Attractions
                    </label>
                    <label class="checkbox-inline">
                        <input type="radio" id="inlineCheckbox2" name="type" value="2"> Restaurants
                    </label>
                    <label class="checkbox-inline">
                        <input type="radio" id="inlineCheckbox3" name="type" value="3"> Hotels
                    </label>
                    <label class="checkbox-inline">
                        <input type="radio" id="inlineCheckbox4" name = "type" value = "4"> Shopping
                    </label>
                    <label class="checkbox-inline">
                        <input type="radio" id="inlineCheckbox6" name="type" value="5"> Events
                    </label>
                </div>
                    <div class="form-group" style="width:40%;">
                      <input name="searchString" class="form-control"  placeholder="Enter search keywords" value="">
                    </div>
                    <button type="submit" class="btn btn-default">Search</button>
                </form>
            </div>
            <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
                <div class ="footer">
                    SFSU-FAU-FULDA joint SW Engineering Project Fall 2013 
                </div>
          </nav>
        </div>
        </body>
        </html>
