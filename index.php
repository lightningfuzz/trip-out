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
        <style type ="text/css">
            body{
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        <link rel ="stylesheet" type ="text/css" href ="css/bootstrap-responsive.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body> 
        <script src="js/bootstrap.js"></script>
        <script src="js/script.js"></script>
        <div class ="container">
            <div class ="row">
                TRIP OUT!
                <div class= "pull-right">
                    Login: <input type="text" placeholder="username" name="tag" value="" />
                    <input type="password" placeholder="password" name="tag" value="" />
                </div>
            </div>
            
            <div class="row">
                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="container">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <div class="nav-collapse">
                                <ul class="nav">
                                    <li class="active"><a href="#" id ="homeLink"> <span class="glyphicon glyphicon-home"></span> Home</a></li>
                                    <li><a href="#" id ="aboutLink">About</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                            <!--/.nav-collapse -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="container" id="mainContent">
                <form name="citySearch" method ="GET" action="city_search.php">
                    Enter keywords:
                    <input type="text" class="search-query" placeholder="Search" name="tag" value="" />
                    <button type="submit" class="btn btn-default" value="Go">Search Destinations</button>
                </form>
            </div>
    </body>
</html>
