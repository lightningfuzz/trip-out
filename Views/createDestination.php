<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap.css">
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap-responsive.css">
        <script src="../js/bootstrap.js"></script>
        <script src="../js/script.js"></script>
        <script src="../js/jquery.js"></script>
        <link rel ="stylesheet" type ="text/css" href ="../css/custom>
        <!-- Add jQuery library -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Create a Destination</title>
    </head>
    <body>
        <h2 align="center">Create a Destination</h2>
        <div align="center">
             <div style="border:2px solid; border-radius:25px; display: block;
               text-align: center; float: center; width: 50%; height: 50%">
        <p>Enter a Destination</p>

        <form class="create_dest_form" method="post" action="">
            <input class="input-medium" type="text" placeholder="Enter destination" >
            <select class="input-small">
                <option value="all">All</option>
                <option value="Attractions">Attractions</option>
                <option value="Events">Events</option>
                <option value="Hotels">Hotels</option>
                <option value="Restaurants">Restaurants</option> 
            </select> 
            <!--<input type="submit" value="search!" /> <br><br> -->
            <button type="submit" class="btn">Search</button>

            <p>Title of your Review</p>
            <input class="input-large" type="text" placeholder="review title">
            <p>Your Review</p>
            <textarea class="input-xxlarge" style="resize: none; height: 110px;">Write Review Here!</textarea>
            <br>
            <!-- <input type="submit" value="Submit" />  -->
            <input class="btn btn-default" type="submit" id="reviewSubmitButton" value="Submit!">
            <br><br><br>
        </form>
        <form action="">
             <input type="file" name="img" placeholder="Select a media file">
              <input class="btn btn-default" type="submit" id="mediaSubmitButton" value="Submit!">
            <!--<input type="submit"> -->
        </form>
        <?php
        // put your code here
        ?>
            </div>
        </div>
    </body>
</html>
