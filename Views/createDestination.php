<?php

    
    require_once("../Controllers/DestinationController.php");
    require_once("../Models/Destination.php");
    require_once '../Session/Session.php';
    require_once '../Controllers/AccountController.php';
    
    $s = Session::getInstance();
    $s->start();
    
    //redirect to signIn page if user is not logged in
    if(!AccountController::isLogin()){
        header("Location: signIn.php");
    }
    if(AccountController::isLogin()){
        $user = AccountController::getLoggedinUser();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && 
            array_key_exists('logout', $_POST)) {
        AccountController::logout();
    }
    
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
        $destin->setDescription($_POST['destDescription']);
        
        try{
            $result = DestinationController::create($destin);
         }
        catch(DestinationException $e){
            echo $e;
            exit;
        }
        $destinationId=$result->getDestId();
        header('Location: destinationDetail.php?destinationId=' . $destinationId);
        exit;
    }?>
<!DOCTYPE html>
<html>
    <head>
        <!--<link rel ="stylesheet" type ="text/css" href ="../css/bootstrap.css"> -->
        <link rel ="stylesheet" type ="text/css" href ="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap-responsive.css">
        <link rel ="stylesheet" type ="text/css" href ="../css/index.css">

        <script src="../js/bootstrap.js"></script>
        <script src="../js/script.js"></script>
        <script src="../js/jquery.js"></script>
        <link rel ="stylesheet" type ="text/css" href ="../css/custom>
        <!-- Add jQuery library -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    
        <!--Jquery fileuploader thingy -->

        <title>Create a Destination</title>
    </head>
    <body> 
        <!-- BEGIN CONTAINER -->
        <div class="container">
                <nav class="navbar navbar-inverse" role="navigation">
                <a class="navbar-brand" href="" id ="logo">TRIP OUT!</a>
                <ul class="nav navbar-nav">
                    <li name = "home" class="active"><a href="">Home</a></li>
                    <li><a href="reviewSearch.php">Write a Review</a></li>
                    <li><a href="createDestination.php">Create a Destination</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
                    <?php if (AccountController::isLogin()): ?>
                        <form class = "navbar-form navbar-right" style ="color:white;" action ="../index.php" method="post">
                            Hello, <?php echo $user->getUserName(); ?> | 
                            <input class = "btn btn-default" type="submit" name = "logout" value ="logout"></input>
                        </form>
                     <?php else: ?>
                        <form class="navbar-form navbar-right">
                            <a type="submit" class="btn btn-default" href="signIn.php" id ="signInButton">Sign In</a>;
                            <a type="submit" class="btn btn-default" href="signUp.php" id ="registerButton">Register</a>;
                        </form>;
                    <?php endif ?>
            </nav>
         <!-- begin body of site -->
         
        <h2 align="center">Create a Destination</h2>
        <div align="center">
             <div style="border:2px solid; border-radius:25px; display: block;
               text-align: center; float: center; width: 55%; height: 50%">
        <p><br>Name of Destination</p>
        <!-- all must be in a form -->
        <form class="create_dest_form" method="POST" action="createDestination.php">
            <input class="input-medium" name ="destName" type="text" placeholder="Name" required>
            <br>
            <select name="destType" class="input-small">
                <option value="">-Category-</option>
                <option value="1">Attractions</option>
                <option value="2">Restaurants</option>
                <option value="3">Hotels</option>   
                <option value="4">Events</option>
                <!-- need to add option for shopping -->
            </select> 
            <!--<input type="submit" value="search!" /> <br><br> -->
            <p><br>Address</p>
            <input class="input-large" type="text" placeholder="Address" name="destAddress" required>
            <p></p>
            <input class="input-large" name="destCity" type="text" placeholder="City" required>
            <p></p>
            <input class="input-mini" name="destZip" type="number" placeholder="Zip" required pattern="\d{5}" required>
            <p></p>
            <!-- from http://chrishacia.com/2012/10/html-select-box-country-list-with-iso-codes-as-values/ -->
            <select name="destState" required> 
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
            <input type="tel" class="input-large" placeholder="Phone Num" name="destPhone"> 
            <p></p>
            <input class="input-large" name="destWebsite" type="url" placeholder="website" pattern="https?://.+">
            <p></p>
            <p>Description</p>
            <textarea class="input-xxlarge" name="destDescription" style="resize: none; width: 40%;" required></textarea>
            <br>
            <!--
             <a href = "destinationDetail.php" class="btn btn-primary">
                            Submit!
            </a> -->
            <input class ="btn btn-primary" type="submit"/>
        </form>
        <br/><br/>
        
        <!-- file uploader stuff -->
        
        <div id="uploader">
            <input id="fileupload" type="file" name="files[]" data-url="#" multiple>
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
            <script src="../jqueryFileUploader/js/vendor/jquery.ui.widget.js"></script>
            <script src="./jqueryFileUploader/js/jquery.iframe-transport.js"></script>
            <script src="./jqueryFileUploader/js/jquery.fileupload.js"></script>
            <script>
            $(function () {
                $('#fileupload').fileupload({
                    dataType: 'json',
                    done: function (e, data) {
                        $.each(data.result.files, function (index, file) {
                            $('<p/>').text(file.name).appendTo(document.body);
                        });
                    }
                });
                
            });
            </script>
        </div>

        <!-- BEGIN FOOTER-->
          <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
             <div class ="footer">
                 SFSU-FAU-FULDA joint SW Engineering Project Fall 2013
             </div>
          </nav>
        <!-- END FOOTER -->
      </div>
    </div>
    <!-- END CONTAINTER -->
    </body>
</html>
