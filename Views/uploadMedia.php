<!-- Author:Matthew Rutherford 
Made by Modifying signIn.php-Rob Pennock-->
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
                <h3>Upload pictures or videos</h3>
                <p>
                <form name="logon" action="index.php" method="POST">
                    <p>Title: <input type="text" name="mediaTitle"></p>
                    <p><input type="file" name="media"></p>
                    <input class="btn btn-default" type="submit" id="editButton" value="Submit">
                </form>
                </p>
         </div>
     </div>
    </div>
</html>

