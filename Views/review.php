<html>
    <head>
        <title>TRIP OUT!</title>    
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap.css">
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap-responsive.css">
        <script src="../js/bootstrap.js"></script>
        <script src="../js/script.js"></script>
        <script src="../js/jquery.js"></script>
        <!-- Add jQuery library -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    </head>
    <div class="container">
     <div class="row">
         <div class="span5">
                <h3>Write a Review</h3>
                <form name="logon" action="index.php" method="POST" >
                    Title: <input type="text" name="reviewTitle"> 
                                <p> 
                                <img src="../media/images/rate1.png"/><img src="../media/images/rate1.png"/>
                                <img src="../media/images/rate1.png"/><img src="../media/images/rate1.png"/>
                                <img src="../media/images/rate1.png"/><br/>
                                </p><br>
                    Review: <input type="text" input name="reviewText" style="height:100px; width:300px"><br>
                    <hr>
                    <p>Upload Media(Optional)</p> <input type=file  value="Browse"><br>
                    Media Title: <input type="text" name="reviewTitle"><br>
                    <input class="btn btn-default" type="submit" id="editButton" value="Submit">
                </form>
         </div>
     </div>
    </div>
</html>

