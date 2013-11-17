<!-- Author:Matthew Rutherford 
Nav bar: Marcian Diamond/Help with Fancy Box
Stars:Khine-->
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
                <!-- BEGIN BANNER -->
        <div style ="background-color:black;">
            <img src="../media/assets/images/tripOutLogo.jpg"></img>
            <div class ="pull-right" style="padding-top:20px;color:white;">
                <div class="btn-group">
                        <a href="signUp.php" class="btn btn-primary" id="registerButton">
                            Register
                        </a>
                        <a href="signIn.php" class="btn btn-primary" id="registerButton">
                            Sign In
                        </a>
                </div>    
            </div>
        </div>
            <nav class="navbar navbar-inverse" role="navigation">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="../index.php">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="reviewSearch">Write a Review</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </nav>
            <div class ="container">
            
		<div id = 'photo'>
                    <a href="../media/images/alcatraz/alcatraz1.jpg" title="Arriving on the ferry">
                            <img src="../media/images/alcatraz/alcatraz1.jpg" alt="" class="img-thumbnail" height="100px" width ="300px">
                    </a>
                    <a class="btn btn-primary fancybox fancybox.iframe" href="../Views/uploadMedia.php">Upload Media!</a>
                    <a class="btn btn-info"href="../Views/mediaViewer.php">More media of Alcatraz</a>
		</div>
		<div class = 'info'>
			<h1>Alcatraz</h1>
                        <p>
                            <img src="../media/images/rate3.png"/><img src="../media/images/rate3.png"/>
                            <img src="../media/images/rate3.png"/><img src="../media/images/rate3.png"/>
                            <img src="../media/images/rate1.png"/><span class="badge badge-info">123 Ratings</span>
                        </p>
			<p><b>Category</b> Attraction/Park</p>
                        <p><b>City</b>San Francisco</p>
                        <p><b>Address</b>Just north of San Francisco</p>
                        <p><b>Phone Number</b>(123)123-1234</p>
			<p><b>Description</b>One of the most famous prisons in the world.  It was originally just a rock with very little plant life.  But it was eventually
                        turned into a military base.  It was then turned into a prison, and is now a national park.</p>
		</div>
                <br>
                <div id =".destReviews">
                    <h3>Reviews</h3>
                    <a class="btn btn-mini btn-primary fancybox fancybox.iframe" href="../Views/review.php" title="Write a review">Write a review!</a>
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
                    <ul class="pager">
                        <!--<li><a href="#">Previous</a></li>-->
                        <li><a href="#">Next</a></li>
                    </ul>
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
		$(".fancybox").fancybox({"width":500,"height":200});
	});
        </script>
    </script>
</html>