<!-- Author:Matthew Rutherford 
Made by Modifying signIn.php-Rob Pennock-->
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
    <div class="container">
     <div class="row">
         <div class="span5">
                <h3>Write a Review</h3>
                <form name="logon" action="index.php" method="POST" >
                    Title: <input type="text" name="reviewTitle"> 
                                <div class="rateit"></div><br/><br>
                    Review: <textarea rows="4" cols="50"></textarea><br>
                    <hr>
                    <p>Upload Media(Optional)</p> 
                    Media Title: <input type="text" name="reviewTitle"><br>
                    <input type=file  value="Browse"><br>
                    <input class="btn btn-primary" type="submit" id="editButton" value="Submit">
                </form>
         </div>
     </div>
    </div>
</html>

