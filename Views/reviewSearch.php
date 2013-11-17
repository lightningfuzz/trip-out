<?php

?>
<html>
    <head>
        <title>TRIP OUT!</title>    
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap.css">
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap-responsive.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body> 
        <script src="../js/bootstrap.js"></script>
        <script src="../js/script.js"></script>
        <div class ="container">
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
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Write a Review</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </nav>
            <h3> Write a Review </h3> <br/>
            <p> Review a Destination (e.g., Attractions, Restaurants, Hotels, Events, All) you visited... </p>
            <br/> <br/>
            <div class="panel panel-default" style="width:75%;margin-left:auto;margin-right:auto;">
                <div class="panel-heading">What would you like to review?</div>
                <div class="panel-body" align="center">
                     <form action="reviewSearchResult.php" method="post" class="form-inline" role="form">
                    <div style="padding-bottom:10px;">
                        
                        <label class="checkbox-inline">
                            <input type="radio" id="inlineCheckbox5" name = "reviewType" value="option5" checked> All
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" id="inlineCheckbox1" name ="reviewType" value="option1"> Attractions
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" id="inlineCheckbox2" name ="reviewType" value="option2"> Restaurants
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" id="inlineCheckbox3" name = "reviewType" value="option3"> Hotels
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" id="inlineCheckbox4" name = "reviewType" value="option4"> Events
                        </label>
                    </div>
                        <div class="form-group" style="width:40%;">
                          <input name="txtSearch" class="form-control"  placeholder="Enter search keywords">
                        </div>
                        <button type="submit" class="btn btn-default">Search</button>
                    </form>
                </div>
            </div>

        </div>
    </body>
</html>
