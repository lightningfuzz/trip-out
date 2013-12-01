<?php
    require_once("../Controllers/AccountController.php");
    require_once("../Models/RegisteredUser.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pass1=$_POST['InputPassword'];
        $pass2=$_POST['ConfirmPassword'];
        $userEmail = $_POST['InputEmail'];
        $userName = $_POST['InputUsername'];
        $blank = "";
       

        //****fallback for safari support*****//
        //make sure fields are filled out
        if((strcmp( $userName , $blank )=== 0)||(strcmp( $userEmail , $blank )=== 0) || (strcmp( $pass1 , $blank )=== 0) || (strcmp( $pass2 , $blank )=== 0)){
            echo "Error: Username, Email, and Password fields must be filled out";
            exit;
        }
        //compare password fields for validation
        else if(strcmp($pass1, $pass2)!=0){
            echo "Error: password fields do not match.";
            exit;
        }
        //check for password length of at least 6 characters
        else if(strlen ( $pass1 )<6){
            echo "Error: password must be at least 6 characters in length";
            exit;
        }
        //now register the user
        else{
            $user = new RegisteredUser();
            $user->setUserName($_POST['InputUsername']); //getting from the POST
            $user->setEmail($_POST['InputEmail']);
            $user->setPassword($_POST['InputPassword']); 
        }
        //create new account for $user
        try{
            $result = AccountController::register($user);
         }
        catch(AccountException $e){
            echo $e;
            exit;
        }
        //redirect to index page
        header('Location: ../index.php');
        exit;
    }?>
<html>
    <head>
         <!--<link rel ="stylesheet" type ="text/css" href ="../css/bootstrap.css"> -->
        <link rel ="stylesheet" type ="text/css" href ="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap-responsive.css">
        <script src="../js/bootstrap.js"></script>
        <script src="../js/script.js"></script>
        <script src="../js/jquery.js"></script>
        <!-- Add jQuery library -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <title></title>
    </head>
    <body>
        
        <!--script below checks to see if passwords match -->
        <!-- logic courtesy of
             http://www.sitepoint.com/using-the-html5-constraint-api-for-form-validation/-->

        <script type="text/javascript">
            window.onload = function () {
               document.getElementById("InputPassword").onchange = validatePassword;
               document.getElementById("ConfirmPassword").onchange = validatePassword;
            }
            //added for safari support
           
            function validatePassword(){
            var pass2=document.getElementById("ConfirmPassword").value;
            var pass1=document.getElementById("InputPassword").value;
            if (pass1.length < 6 )
                document.getElementById("InputPassword").setCustomValidity("Password must be at least 6 characters long");
            else
                document.getElementById("InputPassword").setCustomValidity(''); 
                //clear pass.length check
            if(pass1!=pass2)
               document.getElementById("ConfirmPassword").setCustomValidity("Passwords Don't Match");
            else
               document.getElementById("ConfirmPassword").setCustomValidity('');  
            //empty string means no validation error
            }
            
        </script>

    <!-- Borrowed from Marcians original signup page

    <div class="row" align="center">
        <!-- <div class="span6"> -->


        <nav class="navbar navbar-inverse" role="navigation">
            <a class="navbar-brand" href="" id ="logo">TRIP OUT!</a>
            <ul class="nav navbar-nav">
                <li name = "home" class="active"><a href="">Home</a></li>
                <li><a href="reviewSearch.php">Write a Review</a></li>
                <li><a href="createDestination.php">Create a Destination</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <a type="submit" class="btn btn-default" href="Views/signIn.php" id ="signInButton">Sign In</a>
                <a type="submit" class="btn btn-default" href="Views/signUp.php" id ="registerButton">Register</a>
            </form>
        </nav>
        <div align="center" style="border:2px solid; border-radius:25px; display: block;
        text-align: center; float: center; width: 30%; height: 65%">
         <h3>Sign Up</h3>
         <!-- form needed for sending POST -->
         <form name="ValidationForm" class="form-horizontal" action="signUp.php" method="POST" >
             <div class="control-group">
                 <label class="control-label" for="InputUsername">Username:</label>
                     <div class="controls">
                         <input type="text" name="InputUsername" id="InputUsername" placeholder="username" required>
                     </div>
             </div>
             <div class="control-group">
                 <label class="control-label" for="InputEmail">Email:</label>
                     <div class="controls">
                         <input type="email" name="InputEmail" id="InputEmail" placeholder="email" required>
                     </div>
             </div>
             <div class="control-group">
                 <label class="control-label" for="InputPassword">Password:</label>
                     <div class="controls">
                         <input type="password" name="InputPassword" id="InputPassword" placeholder="password" required>
                     </div>
             </div>
             <div class="control-group">
                 <label class="control-label" for="ConfirmPassword">Confirm Password:</label>
                     <div class="controls">
                         <input type="password" name="ConfirmPassword" id="ConfirmPassword" placeholder="confirm password" required>
                     </div>
             </div>

                 <br>
                 <input class ="btn btn-primary" type="submit"/>
            </form>
        </div>
    </body>            
</html>
