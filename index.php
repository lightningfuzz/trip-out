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
        <!-- just in case we want to use CDN:        
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        -->
        <script src="js/jquery.js"></script>
        <!-- load custom javascript -->
        <script>
            $.getScript( "js/script.js");
        </script>
        <div class ="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <a class="navbar-brand" href="#" id ="logo">TRIP OUT!</a>
                <ul class="nav navbar-nav">
                    <li name = "home" class="active"><a href="#" id="homeLink">Home</a></li>
                    <li name = "writeReview"><a href="#" id ="writeReviewLink">Write a Review</a></li>
                    <li name = "createDestination"><a href="Views/createDestination.php" id="createDestinationLink">Create a Destination</a></li>
                    <li name = "about"><a href="#" id="aboutLink">About</a></li>
                    <li name = "contact"><a href="#" id ="contactLink">Contact</a></li>
                    <li name = "FAQ"><a href="#" id ="faqLink">FAQ</a></li>
                    
                </ul>
                <form class="navbar-form navbar-right">
                    <a type="submit" class="btn btn-default" href="#" id ="signInButton">Sign In</a>
                    <a type="submit" class="btn btn-default" href="#" id ="registerButton">Register</a>
                </form>
            </nav>
            <div id = "mainContent">
                <script>
                    $(document).ready(function(){
                        $('#mainContent').load('Views/home.php');
                    });
                </script>
            </div>
            <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
                <div class ="footer">
                    SFSU-FAU-FULDA joint SW Engineering Project Fall 2013 
                </div>
            </nav>
        </div>
    </body>
</html>
