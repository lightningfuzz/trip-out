<!DOCTYPE HTML>
<html>
	<head>
            <link rel="shortcut icon" href="../media/assets/images/TripoutIcon.ico">
            <title>Alcatraz</title> 
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
                    <li class="active"><a href="http://sfsuswe.com/~mruthe/">Home</a></li>
                    <li><a href="../Views/about.html">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="../Views/reviewSearch.php">Write a Review</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </nav>
            
		<div>
		<div id = 'photo'>
                    <a href="../media/images/alcatraz/alcatraz1.jpg">
                            <img src="../media/images/alcatraz/alcatraz1.jpg" alt="" class="img-thumbnail" height="100px" width ="300px">
                    </a>
		</div>
		<div class = 'info'>
			<h1>Alcatraz</h1>
                        <p>
                            <img src="../media/images/rate3.png"/><img src="../media/images/rate3.png"/>
                            <img src="../media/images/rate3.png"/><img src="../media/images/rate3.png"/>
                            <img src="../media/images/rate1.png"/>(123)
                        </p>
			<p>Category: Attraction/Park</p>
			<p>One of the most well known prisons in the world</p>
		</div>
		</div>
                        <p><a class="fancybox fancybox.iframe" href="../Views/uploadMedia.php">Upload Media!</a></p>
                        <p><a href="../Views/mediaViewer.php">More media of Alcatraz</a></p>
                <div>
                    <h3>Reviews</h3>
                    <a class="fancybox fancybox.iframe" href="../Views/review.php" title="Write a review">Write a review!</a>
                    <p>Showing 1-4 out of 15 Reviews</p>
                    <ul>
                        <li><p>Very Educational! 
                                <img src="../media/images/rate3.png"/><img src="../media/images/rate3.png"/>
                                <img src="../media/images/rate3.png"/><img src="../media/images/rate3.png"/>
                                <img src="../media/images/rate1.png"/><br/>
                            </p>
                            <p>There was plenty to discover on this rock.</p>
                            <p class = "byline">by user2</p>
                            <hr>
                        </li>
                            <li><p>Boring!
                                <img src="../media/images/rate3.png"/><img src="../media/images/rate3.png"/>
                                <img src="../media/images/rate1.png"/><img src="../media/images/rate1.png"/>
                                <img src="../media/images/rate1.png"/><br/>
                                </p>
                            <p>Just a bunch of history about a famous prison.</p>
                            <p class = "byline">by trippin</p>
                            <hr>
                        </li>
                         </li>
                            <li><p>Lots of birds! 
                                <img src="../media/images/rate3.png"/><img src="../media/images/rate3.png"/>
                                <img src="../media/images/rate3.png"/><img src="../media/images/rate1.png"/>
                                <img src="../media/images/rate1.png"/><br/>
                                </p>
                            <p>This is a nesting ground for birds, so be careful where you have your food.</p>
                            <p class = "byline">by strebek</p>
                            <hr>
                        </li>
                        </li>
                            <li><p>Crowded but worth it 
                                <img src="../media/images/rate3.png"/><img src="../media/images/rate3.png"/>
                                <img src="../media/images/rate3.png"/><img src="../media/images/rate1.png"/>
                                <img src="../media/images/rate1.png"/><br/>
                                </p>
                            <p>This is a nesting ground for birds, so be careful where you have your food.</p>
                            <p class = "byline">by user3</p>
                            <hr>
                        </li>
                    </ul>
                    <p><a href="../Views/destinationDetail.php">More reviews</a></p>
                </div>
                </div>
	</body>
           <script type="text/javascript">
	$(document).ready(function() {
                $("a[href$='.jpg']").attr('rel', 'gallery').fancybox();
	});
        </script>
         <script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox({"width":350,"height":200});
	});
        </script>
    </script>
</html>