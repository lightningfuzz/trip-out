<!-- Author:Matthew Rutherford 
Made by Modifying signIn.php-Rob Pennock-->
<?php
    require_once("../Controllers/ReviewController.php");
    require_once("../Models/Review.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rev = new Review();
        $rev->setDestId($_POST['destinationID']);
        $rev->setComment($_POST['review']);
        $rev->setTitle($_POST['reviewTitle']);
        $rev->setUserId(4);
        $rev->setRating(2);
        
        try{
            ReviewController::add($rev);
         }
        catch(ReviewException $e){
            echo $e;
            exit;
        }
        exit;
    }
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $dest=$_GET['destid'];
            echo $dest;
    }
 
 
    ?>
<html>
    <head>
        <title>TRIP OUT!</title> 
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap.css">
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap-responsive.css">
        <link rel ="stylesheet" type ="text/css" href ="../rateit/src/rateit.css"> 
        
        <script src="../js/bootstrap.js"></script>
        <script src="../js/script.js"></script>
        <script src="../js/jquery.js"></script>
        <script src="../rateit/src/jquery.rateit.js"></script>
        <!-- Add jQuery library -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    </head>
    <body>
        
    <div class="container">
         <div class="span5">
                <h3>Write a Review!</h3>
                <form name="logon" action="review.php" method="POST" >
                    <input type="hidden" name="destinationID" value="<?php echo $dest;?>">
                    Title: <input type="text" name="reviewTitle"> 
                                <div class="rateit"></div><br/><br>
                    Review: <textarea name="review"rows="4" cols="50"></textarea><br>
                    <hr>
                    <p>Upload Media(Optional)</p> 
                    Media Title: <input type="text" name="mediaTitle"><br>
                    <input type=file  value="Browse"><br>
                    <input class="btn btn-primary" type="submit" id="editButton" value="Submit">
                </form>
         </div>
    </div>
    </body>
</html>

