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
               text-align: center; float: center; width: 55%; height: 50%">
        <p><br>Name of Destination</p>

        <form class="create_dest_form" method="post" action="">
            <input class="input-medium" type="text" placeholder="Name" >
            <br>
            <select class="input-small">
                <option value="">-Category-</option>
                <option value="1">Attractions</option>
                <option value="4">Events</option>
                <option value="3">Hotels</option>
                <option value="2">Restaurants</option> 
            </select> 
            <!--<input type="submit" value="search!" /> <br><br> -->
            <p><br>Address</p>
            <input class="input-large" id="destAddress" type="text" placeholder="Address">
            <p></p>
            <input class="input-large" type="text" placeholder="City">
            <p></p>
            <input class="input-mini" type="text" placeholder="Zip">
            <p></p>
            <!-- from http://chrishacia.com/2012/10/html-select-box-country-list-with-iso-codes-as-values/ -->
            <select name="States-Provinces"> 
                <option> - Select Province/State - </option>
                <option value="Alabama">Alabama</option> 
                <option value="Alaska">Alaska</option> 
                <option value="Arizona">Arizona</option> 
                <option value="Arkansas">Arkansas</option> 
                <option value="California">California</option> 
                <option value="Colorado">Colorado</option> 
                <option value="Connecticut">Connecticut</option> 
                <option value="Delaware">Delaware</option> 
                <option value="Washington DC">District Of Columbia</option> 
                <option value="Florida">Florida</option> 
                <option value="Georgia">Georgia</option> 
                <option value="Hawaii">Hawaii</option> 
                <option value="Idaho">Idaho</option> 
                <option value="Illinois">Illinois</option> 
                <option value="Indiana">Indiana</option> 
                <option value="Iowa">Iowa</option> 
                <option value="Kansas">Kansas</option> 
                <option value="Kentucky">Kentucky</option> 
                <option value="Louisiana">Louisiana</option> 
                <option value="Maine">Maine</option> 
                <option value="Maryland">Maryland</option> 
                <option value="Massachusettes">Massachusetts</option> 
                <option value="Michigan">Michigan</option> 
                <option value="Minnesota">Minnesota</option> 
                <option value="Mississippi">Mississippi</option> 
                <option value="Missouri">Missouri</option> 
                <option value="Montana">Montana</option> 
                <option value="Nebraska">Nebraska</option> 
                <option value="Nevada">Nevada</option> 
                <option value="New Hampshire">New Hampshire</option> 
                <option value="New Jersey">New Jersey</option> 
                <option value="New Mexico">New Mexico</option> 
                <option value="New York">New York</option> 
                <option value="North Carolina">North Carolina</option> 
                <option value="North Dakota">North Dakota</option> 
                <option value="Ohio">Ohio</option> 
                <option value="Oklahoma">Oklahoma</option> 
                <option value="Oregon">Oregon</option> 
                <option value="Pennsylvania">Pennsylvania</option> 
                <option value="Rhode Island">Rhode Island</option> 
                <option value="South Carolina">South Carolina</option> 
                <option value="South Dakota">South Dakota</option> 
                <option value="Tennessee">Tennessee</option> 
                <option value="Texas">Texas</option> 
                <option value="Utah">Utah</option> 
                <option value="Vermont">Vermont</option> 
                <option value="Virginia">Virginia</option> 
                <option value="Washington">Washington</option> 
                <option value="West Virginia">West Virginia</option> 
                <option value="Wisconsin">Wisconsin</option> 
                <option value="Wyoming">Wyoming</option>
                <option> ---------------- </option>
                <option value="Alberta">Alberta</option>
                <option value="British Columbia">British Columbia</option>
                <option value="Manitoba">Manitoba</option>
                <option value="New Brunswick">New Brunswick</option>
                <option value="Newfoundland">Newfoundland and Labrador</option>
                <option value="Nova Scotia">Nova Scotia</option>
                <option value="Northwest Territories">Northwest Territories</option>
                <option value="Nunavut">Nunavut</option>
                <option value="Ontario">Ontario</option>
                <option value="Prince Edward Island">Prince Edward Island</option>
                <option value="Quebec">Quebec</option>
                <option value="Saskatchewan">Saskatchewan</option>
                <option value="Yukon">Yukon</option>
            </select>
            <p><br>Additional Info</p>
            <input class="input-large" type="text" placeholder="Phone Number"> 
            <p></p>
            <input class="input-large" type="text" placeholder="Website">
            <p></p>
            <p>Description</p>
            <textarea class="input-xxlarge" style="resize: none; width: 40%;"></textarea>
            <!-- <input type="submit" value="Submit" />  -->
        </form>
        <p>Select an image to upload</p>
       <form style="display: inline;" action="">
             <input type="file" name="media" style="position: relative; left: 40%;">

             <a href="destinationDetail.php" class="btn btn-primary" id="createDestSubmitButtonButton">
                            Submit!
            </a>
        </form>
        
        <?php
        // put your code here
        ?>
        </div>
      </div>
    </body>
</html>
