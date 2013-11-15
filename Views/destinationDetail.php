<!DOCTYPE HTML>
<html>
	<head>
            <title>Detail Trip</title> 
		<link rel ="stylesheet" type="type/css" href ="../css/destinationDetail.css" /> 
                <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap.css">
                <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap-responsive.css"> 
                
                        <!--FANCY BOX FILES-->
                <!-- Add jQuery library -->
                <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
                <!-- Add fancyBox -->
                <link rel="stylesheet" href="../fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
                <script type="text/javascript" src="../fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
                <!-- Optionally add helpers - button, thumbnail and/or media -->
                <link rel="stylesheet" href="../fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
                <script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
                <script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
                <link rel="stylesheet" href="../fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
                <script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
                <!--END FANCYBOX FILES-->
	</head>
	<body>
            <script src="../js/bootstrap.js"></script>
            <script src="../js/script.js"></script>
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
                    <li><a href="../Views/about.html">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="../Views/reviewSearch.php">Write a Review</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </nav>
            
		<div>
		<div id = 'photo'>
                    <a href="../media/images/dumplingking.jpg">
                            <img src="../media/images/dumplingking.jpg" alt="" class="img-thumbnail" height="300px" width ="140px">
                    </a>
		</div>
		<div id = 'info'>
			<h2>Shanghai Dumpling King</h2>
			<p name="pop">Restaurant / Chineese</p>
			<p id = 'pop'>Food to go Call 387-2088</p>
			<p name = 'pop'><a  href="http://www.shanghaidumplingkingsf.com/">Website</a></p>
		</div>
		</div>
			<p><a href ="../Views/review.php"> Upload Media </a></p>
                        <p><a href="../Views/mediaViewer.php">More media of Shanghai Dumpling King</a></p>
                <div>
                    <h4>Reviews</h4>
                    <a class="fancybox" href="../Views/review.php" title="Lorem ipsum dolor sit amet">Write a review</a>
                    <p><a href ="../Views/review.php"> Write a review </a></p>
                    <p>Showing 1-3 out of 15 Reviews</p>
                    <ul>
                        <li><p>Good Eats!                *****</p>
                            <p>This was the best food I have ever eaten ever.</p>
                        </li>
                            <li><p>Okay Eats!            ***</p>
                            <p>This was the most okay food I have ever eaten.</p>
                        </li>
                         </li>
                            <li><p>Meh Eats!             **</p>
                            <p>This was the most meh food I have ever eaten.</p>
                        </li>
                    </ul>
                    <p><a href="../Views/destinationDetail.php">More reviews</a></p>
                </div>
                </div>
	</body>
</html>