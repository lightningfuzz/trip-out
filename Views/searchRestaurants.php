<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <title>TRIP OUT! Search Restaurants</title>    
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap.css">
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap-responsive.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel = "stylesheet" type = "text/css" href = "../css/searchResult.css">
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
            <div class="panel panel-default" style="width:75%;margin-left:auto;margin-right:auto;">
                <div class="panel-heading">Plan Your Destination</div>
                <div class="panel-body" align="center">
                    <div style="padding-bottom:10px;">
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
                            <input type="checkbox" id="inlineCheckbox4" value="option4"> Events
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox5" value="option5"> All
                        </label>
                    </div>
                    <form class="form-inline" role="form">
                        <div class="form-group" style="width:40%;">
                          <input class="form-control"  placeholder="Enter search keywords">
                        </div>
                        <button type="submit" class="btn btn-default">Search Destinations</button>
                    </form>
                </div>
            </div>
            <div class = "left_pane">
			<h4> Filter By Restaurants: </h4>			
				
			<input type = "checkbox" name = "filter" value = "American Food"> American Food <br/>
			<input type = "checkbox" name = "filter" value = "Chinese Food"> Chinese Food <br/>
			<input type = "checkbox" name = "filter" value = "Mexican Food"> Mexican Food <br/>
			<input type = "checkbox" name = "filter" value = "Japanese Food"> Japanese Food <br/>
			<input type = "checkbox" name = "filter" value = "Thai Food"> Thai Food <br/>
                        <input type = "checkbox" name = "filter" value = "Fast Food"> Fast Food <br/>
					
		</div>
		
		<div class = "content">
			<h3 style = "color: green"> Results of Search "Restaurants" </h3> 
			<p style = "text-align: right; padding-right: 100px"> Showing 1 - 3 out of 10 </p> <br/>
			<div class = "destination">
				<img src = "../media/images/dumplingking.jpg" width = "150" height = "100" style = "float: left">			
				<a href = "destinationDetail.php" style = "text-decoration: none"> 			
					<h4> (1) Dumpling King </h4> 
				</a>
				&nbsp; Chinese Food
				<p style = "float: left; clear: both">
					One of the best chinese restaurants in town! 
				</p>					
			</div>
			<br/>
		
			<div class = "destination">
					<img src = "../media/images/mcdonalds.png" width = "150" height = "100" style = "float: left">			
					<a href = "destinationDetail.php" style = "text-decoration: none"> 			
						<h4> (2) Mc Donalds </h4> 
					</a>
					&nbsp; Fast Food
					<p style = "float: left; clear: both">
					destination	Mcdonalds....... fast food! 
					</p>			
			</div>
			<br/>
			
			<div class = "destination">
					<img src = "../media/images/hp9.jpg" width = "150" height = "100" style = "float: left">			
					<a href = "destinationDetail.php" style = "text-decoration: none"> 			
						<h4> (3) Dumplings </h4> 
					</a>
					&nbsp; Chinese Food
					<p style = "float: left; clear: both">
						Dumplings! 
					</p>			
			</div>
			<br/>
		</div>

        </div>
    </body>
</html>
