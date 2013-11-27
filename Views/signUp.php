<?php
    require_once("../Controllers/AccountController.php");
    require_once("../Models/RegisteredUser.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = new RegisteredUser();
        $user->setUserName($_POST['inputUsername']); //getting from the POST
        $user->setEmail($_POST['inputEmail']);
        $user->setPassword($_POST['inputPassword']);

        try{
            $result = AccountController::create($user);
         }
        catch(AccountException $e){
            echo $e;
            exit;
        }
        header('Location: index.php');
        exit;
    }?>
<<!-- Borrowed from Marcians original signup page
<div class="row" align="center">
    <!-- <div class="span6"> -->
        <div align="center" style="border:2px solid; border-radius:25px; display: block;
        text-align: center; float: center; width: 30%; height: 65%">
         <h3>Sign Up</h3>
         <!-- form needed for sending POST -->
         <form class="form-horizontal" action="signUp.php" method="POST" >
             <div class="control-group">
                 <label class="control-label" for="inputUsername">Username:</label>
                     <div class="controls">
                         <input type="text" id="inputUsername" placeholder="username" required>
                     </div>
             </div>
             <div class="control-group">
                 <label class="control-label" for="inputEmail">Email:</label>
                     <div class="controls">
                         <input type="text" id="inputEmail" placeholder="email" required>
                     </div>
             </div>
             <div class="control-group">
                 <label class="control-label" for="inputPassword">Password:</label>
                     <div class="controls">
                         <input type="text" id="inputPassword" placeholder="password" required>
                     </div>
             </div>
             <div class="control-group">
                 <label class="control-label" for="confirmPassword">Confirm Password:</label>
                     <div class="controls">
                         <input type="text" id="confirmpassword" placeholder="confirm password" required>
                     </div>
             </div>
             <br>
             <a href="http://sfsuswe.com/~rpenno/index.php" class="btn btn-primary" id="signUpButton">
             Register Now
             </a>
        </form>
    </div>
</div>
            

