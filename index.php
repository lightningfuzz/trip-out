<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <title>TRIP OUT!</title>    
        <link rel ="stylesheet" type ="text/css" href ="css/bootstrap.css">
        <link rel ="stylesheet" type ="text/css" href ="css/bootstrap-responsive.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body> 
        <script src="js/bootstrap.js"></script>
        <script src="js/script.js"></script>
        <div class ="container">
            <div style ="background-color:black;">
                <img src="media/assets/images/tripOutLogo.jpg"></img>
                <div class ="pull-right" style="padding-top:20px;">
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
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Write a Review</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </nav>
            <div class="panel panel-default">
                <div class="panel-heading">Plan Your Destination</div>
                <div class="panel-body">
                    <form name="citySearch" method ="GET" action="city_search.php">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Attractions
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="option2"> Restaurants
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="option3"> Hotels
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="option3"> Events
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="option3"> All
                    </label>
                          <input type="text" class="search-query" placeholder="Enter search keywords" name="tag" value="" />
                          <button type="submit" class="btn btn-default" value="Go">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>