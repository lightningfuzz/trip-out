<!-- Author:Matthew Rutherford 
Nav bar: Marcian Diamond/Help with Fancy Box
Stars:Khine-->

<?php
    require_once("../Controllers/ReviewController.php");
    require_once("../Models/Destination.php");
    require_once("../DAOs/DestinationDAO.php");
        $destin = DestinationDAO::getByID(33);
        $reviews = ReviewController::getDestinationReviews($destin);
    ?>
<!DOCTYPE HTML>
<html>
	<head>
            <link rel="shortcut icon" href="../media/assets/images/TripoutIcon.ico">
            <title><?php echo $destin->getName(); ?></title> 
            <link rel ="stylesheet" type="text/css" href ="../css/destinationDetail.css" /> 
            <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap.css">
            <link rel ="stylesheet" type ="text/css" href ="../css/index.css">
            <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap-responsive.css"> 
            
            <script src="../js/jquery.js"></script>
            <script src="../js/bootstrap.js"></script>
            <script src="../js/bootstrap.min.js"></script>
            <script src="../js/script.js"></script>
           

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
            <!--container holds all the content of the page-->
            <div class ="container">
                <!-- BEGIN BANNER -->
                <nav class="navbar navbar-inverse" role="navigation">
                    <a class="navbar-brand" href="../index.php">TRIP OUT!</a>
                    <ul class="nav navbar-nav">
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="reviewSearch.php">Write a Review</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                    <form class="navbar-form navbar-right">
                        <a type="submit" class="btn btn-default" href="signIn.php">Sign In</a>
                        <a type="submit" class="btn btn-default" href="signUp.php">Register</a>
                    </form>
                </nav>
                <!-- END BANNER -->
                <!--Photo is the main photo of the destination and has buttons for uploading media or seeing more-->
                <div id ='tooper'>
		<div id = 'photo' class='top'>
                    <div id="mainphoto">
                    <a href="../media/images/alcatraz/alcatraz1.jpg" title="Arriving on the ferry">
                            <img src="../media/images/alcatraz/alcatraz1.jpg" alt="" class="img-thumbnail" width ="300px">
                    </a>
                    </div>
                    <div id="media">
                    <a class="btn btn-primary fancybox fancybox.iframe" href="../Views/uploadMedia.php">Upload Picture/Video</a>
                    <a class="btn btn-info" href="../Views/mediaViewer.php">More Pictures/Videos</a>
                    </div>
		</div>
                <!-- holds all the information about a locations(rating, description, name, ...)-->
		<div id = 'info' class='top'>
                    <h1><?php echo $destin->getName(); ?></h1>
                    <p>
                        <img src="../media/images/rate3.png"/><img src="../media/images/rate3.png"/>
                        <img src="../media/images/rate3.png"/><img src="../media/images/rate3.png"/>
                        <img src="../media/images/rate1.png"/><span class="badge badge-info">123 Ratings</span>
                    </p>
                    <p><b>Category: </b> <?php echo $destin->getType(); ?></p>
                    <p><b>City: </b><?php echo $destin->getCity(); ?></p>
                    <p><b>Address: </b><?php echo $destin->getAddress(); ?></p>
                    <p><b>Phone Number: </b><?php echo $destin->getPhoneNumber(); ?></p>
                    <p><b>Description: </b><?php echo $destin->getDescription(); ?></p>
		</div>
                <br>
                </div>
                <p></p>
                <div id ='destReviews'>
                    <h3>Reviews</h3>
                    <a class="btn btn-mini btn-primary fancybox fancybox.iframe" href="../Views/review.php" title="Write a review">Write a review!</a>
                    
                    <p>Showing 1-4 out of 15 Reviews</p>
                    <ul>
                        <?php
                        foreach($reviews as $rev):
                        ?>
                        <li><p><?php echo $rev->getTitle() ?>
                                <img src="../media/images/rate3.png"/><img src="../media/images/rate3.png"/>
                                <img src="../media/images/rate3.png"/><img src="../media/images/rate3.png"/>
                                <img src="../media/images/rate1.png"/><br/>
                            </p>
                            <p><?php echo $rev->getComment() ?></p>
                            <p class = "byline"><?php require_once("../DAOs/RegisteredUserDAO.php");
                             echo RegisteredUserDAO::getByID($rev->getUserId())->getUserName(); ?></p>
                            <hr>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <ul class="pager">
                        <!--<li><a href="#">Previous</a></li>-->
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
                <!-- BEGIN FOOTER -->
                <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
                    <div class ="footer">
                        SFSU-FAU-FULDA joint SW Engineering Project Fall 2013
                    </div>
                </nav>
                <!-- END FOOTER -->
            </div>
            <!-- END CONTAINER -->
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