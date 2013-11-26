<?php

?>
<html>
    <head>
        <title>TRIP OUT!</title>    
        <link rel ="stylesheet" type ="text/css" href ="css/bootstrap.css">
        <link rel ="stylesheet" type ="text/css" href ="css/bootstrap-responsive.css"> 
        <link rel ="stylesheet" type ="text/css" href ="css/index.css">
        <script src="js/bootstrap.js"></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Start: Google Analytics Code -->
         <script>
             
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-45881599-1', 'sfsuswe.com');
            ga('send', 'pageview');

         </script>
        
        <!-- End: Google Analytics Code -->
        
    </head>
    <body> 
        <!-- using jquery -->
        <script src="js/jquery.js"></script>
        <!-- load custom javascript -->
        <script>
            $.getScript( "js/script.js");
        </script>
        <div class ="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <a class="navbar-brand" href="#">TRIP OUT!</a>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="Views/reviewSearch.php">Write a Review</a></li>
                    <li><a href="Views/createDestination.php">Add a Destination</a></li>
                    <li name ="about"><a href="#" id="aboutLink">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
                <form class="navbar-form navbar-right">
                    <a type="submit" class="btn btn-default" href="Views/signIn.php">Sign In</a>
                    <a type="submit" class="btn btn-default" href="Views/signUp.php">Register</a>
                </form>
            </nav>
            <div id = "mainContent">
                <div class ="overview">
                    <h1>Welcome to Trip Out!</h1>
                    Plan your trip, read reviews, share your experiences
                </div>
            
                <div class="panel panel-default" style="width:75%;margin-left:auto;margin-right:auto;vertical-align:middle">
                    <div class="panel-heading">Plan Your Trip</div>
                    <div class="panel-body" align="center">
                        <form action="Views/searchResult.php" method="get" class="form-inline" role="form">
                            <div style="padding-bottom:10px;">
                                <label class="checkbox-inline">
                                    <input type="radio" id="inlineCheckbox5" name = "type" value="0" checked> All
                                </label>
                                <label class="checkbox-inline">
                                    <input type="radio" id="inlineCheckbox1" name ="type" value="1"> Attractions
                                </label>
                                <label class="checkbox-inline">
                                    <input type="radio" id="inlineCheckbox2" name ="type" value="2"> Restaurants
                                </label>
                                <label class="checkbox-inline">
                                    <input type="radio" id="inlineCheckbox3" name = "type" value="3"> Hotels
                                </label>
                                <label class="checkbox-inline">
                                    <input type="radio" id="inlineCheckbox4" name = "type" value="4"> Shopping
                                </label>
                                <label class="checkbox-inline">
                                    <input type="radio" id="inlineCheckbox6" name = "type" value="5"> Events
                                </label>
                            </div>
                            <div class="form-group" style="width:40%;">
                              <input name="searchString" class="form-control"  placeholder="Enter search keywords" value="">
                            </div>
                            <button type="submit" class="btn btn-default">Search</button>
                        </form>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
                <div class ="footer">
                    SFSU-FAU-FULDA joint SW Engineering Project Fall 2013 
                </div>
            </nav>
        </div>
        <!-- <a href>  -->
    </body>

</html>
