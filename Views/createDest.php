<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php
    require_once("../Controllers/DestinationController.php");
    require_once("../Models/Destination.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $destin = new Destination();
        $destin->setName($_POST['destName']);
        $destin->setType($_POST['destType']);
        $destin->setAddress($_POST['destAddress']);
        $destin->setCity($_POST['destCity']);
        $destin->setState($_POST['destState']);
        $destin->setZipCode($_POST['destZip']);
        $destin->setPhoneNumber($_POST['destPhone']);
        $destin->setWebsite($_POST['destWebsite']);
        
        try{
            $result = DestinationController::create($destin);
         }
        catch(DestinationException $e){
            echo $e;
            exit;
        }
        header('Location: destinationDetail.php');
        exit;
    }?>
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

        <form class="create_dest_form" method="POST" action="createDest.php">
            <input class="input-medium" name ="destName" type="text" placeholder="Name" >
            <br>
            <select name="destType" class="input-small">
                <option value="">-Category-</option>
                <option value="1">Attractions</option>
                <option value="2">Restaurants</option>
                <option value="3">Hotels</option>   
                <option value="4">Events</option>
            </select> 
            <!--<input type="submit" value="search!" /> <br><br> -->
            <p><br>Address</p>
            <input class="input-large" name="destAddress" type="text" placeholder="Address">
            <p></p>
            <input class="input-large" name="destCity" type="text" placeholder="City">
            <p></p>
            <input class="input-mini" name="destZip"type="text" placeholder="Zip">
            <p></p>
            <!-- from http://chrishacia.com/2012/10/html-select-box-country-list-with-iso-codes-as-values/ -->
            <select name="destState"> 
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
                <option valfue="Alberta">Alberta</option>
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
            <input class="input-large" name="destPhone" type="text" placeholder="Phone #"> 
            <p></p>
            <input class="input-large" name="destWebsite" type="text" placeholder="website">
            <p></p>
            <p>Description</p>
            <textarea class="input-xxlarge" name="destDescription" style="resize: none; width: 40%;"></textarea>
            <!-- <input type="submit" value="Submit" />  -->
            <p>Select an image to upload</p>
             <input type="file" name="destImage" style="position: relative; left: 40%;">
             <input class ="btn btn-primary" type="submit"/>
             <!--
             <a href="destinationDetail.php" class="btn btn-primary" id="createDestSubmitButtonButton">
                            Submit!
            </a> -->
        </form>
        </div>
      </div>
    </body>
</html>
