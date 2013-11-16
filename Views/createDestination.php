<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <!--<link rel ="stylesheet" type ="text/css" href ="../css/bootstrap.css"> -->
        <link rel ="stylesheet" type ="text/css" href ="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
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
                        <div style = "text-align:right; float:right;padding-top:10px;padding-right:10px;">
                            <!-- <a href="" >forgot password?</a> -->
                        </div>
                </div>
            </div>
            <nav class="navbar navbar-inverse" role="navigation">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Write a Review</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </nav>
         <!-- END BANNER -->
        <h2 align="center">Create a Destination</h2>
        <div align="center">
             <div style="border:2px solid; border-radius:25px; display: block;
               text-align: center; float: center; width: 50%; height: 50%">
        <p><br>Name of Destination</p>

        <form class="create_dest_form" method="post" action="">
            <input class="input-medium" type="text" placeholder="Name" >
            <select class="input-small">
                <option value="---">---</option>
                <option value="Attractions">Attractions</option>
                <option value="Events">Events</option>
                <option value="Hotels">Hotels</option>
                <option value="Restaurants">Restaurants</option> 
            </select> 
            <!--<input type="submit" value="search!" /> <br><br> -->
            <p><br>Address</p>
            <input class="input-large" type="text" placeholder="Address">
            <p><br>Description</p>
            <textarea class="input-xxlarge" style="resize: none; width: 40%;">Description</textarea>
            <!-- <input type="submit" value="Submit" />  -->
            <br>
            <input class="btn btn-primary" type="submit" id="createDestSubmitButton" value="Submit!">
            <br>
        </form>
        <br>
        <p><br>Select an image to upload</p>
       <form style="display: inline;" action="">
             <input type="file" name="media" style="position: relative; left: 40%;">
             <input class="btn btn-primary" type="submit" id="mediaSubmitButton" value="Submit!">
        </form>
        
        <?php
        // put your code here
        ?>
            </div>
        </div>
    </body>
</html>
