<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE HTML>
<html>
	<head>
            <title>Detail Trip</title> 
		<link href="DestinationCSS.css" type="type/css" rel="stylesheet" media="all" />
                <link rel ="stylesheet" type ="text/css" href ="http://sfsuswe.com/~mruthe/css/bootstrap.css">
                <link rel ="stylesheet" type ="text/css" href ="http://sfsuswe.com/~mruthe/css/bootstrap-responsive.css"> 
	</head>
	<body>
            <script src="http://sfsuswe.com/~mruthe/js/bootstrap.js"></script>
            <script src="http://sfsuswe.com/~mruthe/js/script.js"></script>
            <div class ="container">
            <div style ="background-color:black;">
                <img src="http://sfsuswe.com/~mruthe/media/assets/images/tripOutLogo.jpg"></img>
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
            </div>
		<div>
		<div id = 'photo'>
			<p>Photo</p>
			<img src="http://sfsuswe.com/~mruthe/media/images/dumplingking.jpg"/>
		</div>
		<div id = 'info'>
			<h2>Destination Name</h2>
			<p name="pop">Category</p>
			<p id = 'pop'>Description</p>
			<p name = 'pop'>Website URL</p>
		</div>
		</div>
			<p > More Images </p>
                <div>
			<p>Reviews</p>
                </div>
	</body>
</html>