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



<!--Photo is the main photo of the destination and has buttons for uploading media or seeing more-->
<div class ="destinationDetail">
<div id ='tooper'>
    <div id = 'photo' class='top'>
        <div id="mainphoto">
            <a href="media/images/alcatraz/alcatraz1.jpg" title="Arriving on the ferry">
                <img src="media/images/alcatraz/alcatraz1.jpg" alt="" class="img-thumbnail" width ="300px">
            </a>
        </div>
        <div id="media">
            <a class="btn btn-primary fancybox fancybox.iframe" href="Views/uploadMedia.php">Upload Picture/Video</a>
            <a class="btn btn-info" href=#" id ="mediaLink">More Pictures/Videos</a>
        </div>
    </div>
    
    <!-- holds all the information about a locations(rating, description, name, ...)-->
    <div id = 'info' class='top'>
        <h1><?php echo $destin->getName(); ?></h1>
        <p>
            <img src="media/images/rate3.png"/><img src="media/images/rate3.png"/>
            <img src="media/images/rate3.png"/><img src="media/images/rate3.png"/>
            <img src="media/images/rate1.png"/><span class="badge badge-info">123 Ratings</span>
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
    <a class="btn btn-mini btn-primary fancybox fancybox.iframe" href="Views/review.php" title="Write a review">Write a review!</a>
    <p>Showing 1-4 out of 15 Reviews</p>
    <ul>
        <?php
        foreach($reviews as $rev):
        ?>
        <li><p><?php echo $rev->getTitle() ?>
                <img src="media/images/rate3.png"/><img src="media/images/rate3.png"/>
                <img src="media/images/rate3.png"/><img src="media/images/rate3.png"/>
                <img src="media/images/rate1.png"/><br/>
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
</div>

<script type="text/javascript">
    $(document).ready(function() {
         $("a[href$='.jpg']").attr('rel', 'gallery').fancybox();
         $(".fancybox").fancybox({"width":500,"height":200});
         
         //load media viewer into mainContent div of index.php
        $('#mediaLink').on("click",function(){
           // $('div.destinationDetail').parent().load('Views/mediaViewer.php');
            $('div.destinationDetail').parent().load('Views/mediaViewer.php');
        });
    });
</script>
