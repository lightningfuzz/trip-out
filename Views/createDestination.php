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
                <option value="Category">-Category-</option>
                <option value="Attractions">Attractions</option>
                <option value="Events">Events</option>
                <option value="Hotels">Hotels</option>
                <option value="Restaurants">Restaurants</option> 
            </select> 
            <!--<input type="submit" value="search!" /> <br><br> -->
            <p><br>Address</p>
            <input class="input-large" type="text" placeholder="Address">
            <p></p>
            <input class="input-large" type="text" placeholder="City">
            <p></p>
            <input class="input-mini" type="text" placeholder="Zip">
            <p></p>
            <!-- from http://chrishacia.com/2012/10/html-select-box-country-list-with-iso-codes-as-values/ -->
            <select name="States-Provinces"> 
                <option> - Select Province/State - </option>
                <option value="AL">Alabama</option> 
                <option value="AK">Alaska</option> 
                <option value="AZ">Arizona</option> 
                <option value="AR">Arkansas</option> 
                <option value="CA">California</option> 
                <option value="CO">Colorado</option> 
                <option value="CT">Connecticut</option> 
                <option value="DE">Delaware</option> 
                <option value="DC">District Of Columbia</option> 
                <option value="FL">Florida</option> 
                <option value="GA">Georgia</option> 
                <option value="HI">Hawaii</option> 
                <option value="ID">Idaho</option> 
                <option value="IL">Illinois</option> 
                <option value="IN">Indiana</option> 
                <option value="IA">Iowa</option> 
                <option value="KS">Kansas</option> 
                <option value="KY">Kentucky</option> 
                <option value="LA">Louisiana</option> 
                <option value="ME">Maine</option> 
                <option value="MD">Maryland</option> 
                <option value="MA">Massachusetts</option> 
                <option value="MI">Michigan</option> 
                <option value="MN">Minnesota</option> 
                <option value="MS">Mississippi</option> 
                <option value="MO">Missouri</option> 
                <option value="MT">Montana</option> 
                <option value="NE">Nebraska</option> 
                <option value="NV">Nevada</option> 
                <option value="NH">New Hampshire</option> 
                <option value="NJ">New Jersey</option> 
                <option value="NM">New Mexico</option> 
                <option value="NY">New York</option> 
                <option value="NC">North Carolina</option> 
                <option value="ND">North Dakota</option> 
                <option value="OH">Ohio</option> 
                <option value="OK">Oklahoma</option> 
                <option value="OR">Oregon</option> 
                <option value="PA">Pennsylvania</option> 
                <option value="RI">Rhode Island</option> 
                <option value="SC">South Carolina</option> 
                <option value="SD">South Dakota</option> 
                <option value="TN">Tennessee</option> 
                <option value="TX">Texas</option> 
                <option value="UT">Utah</option> 
                <option value="VT">Vermont</option> 
                <option value="VA">Virginia</option> 
                <option value="WA">Washington</option> 
                <option value="WV">West Virginia</option> 
                <option value="WI">Wisconsin</option> 
                <option value="WY">Wyoming</option>
                <option> ---------------- </option>
                <option value="AB">Alberta</option>
                <option value="BC">British Columbia</option>
                <option value="MB">Manitoba</option>
                <option value="NB">New Brunswick</option>
                <option value="NL">Newfoundland and Labrador</option>
                <option value="NS">Nova Scotia</option>
                <option value="NT">Northwest Territories</option>
                <option value="NU">Nunavut</option>
                <option value="ON">Ontario</option>
                <option value="PE">Prince Edward Island</option>
                <option value="QC">Quebec</option>
                <option value="SK">Saskatchewan</option>
                <option value="YT">Yukon</option>
            </select>
            
           
            <p><br>Additional Info</p>
            <input class="input-large" type="text" placeholder="Phone #"> 
            <p></p>
            <input class="input-large" type="text" placeholder="website">
            <p></p>
            <p>Description</p>
            <textarea class="input-xxlarge" style="resize: none; width: 40%;"></textarea>
            <!-- <input type="submit" value="Submit" />  -->
        </form>
        <p>Select an image to upload</p>
       <form style="display: inline;" action="">
             <input type="file" name="media" style="position: relative; left: 40%;">

             <input class="btn btn-primary" type="submit" id="createDestSubmitButton" value="Submit!">
        </form>
        
        <?php
        // put your code here
        ?>
            </div>
        </div>
    </body>
</html>
