<?php
    require_once("../Controllers/DestinationController.php");
    require_once("../Models/Destination.php");
    require_once("../Controllers/AccountController.php");
    require_once("../Models/RegisteredUser.php");
    require_once("../Session/Session.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = ($_POST['user']);
        $password = ($_POST['userpassword']);
        //reverse logifc for isUsernameValid: see AccountController
        //check if user exists
        if(AccountController::isUsernameValid($username)){
            echo "invalid username";
            exit;
        }
        try{
            $result = AccountController::login($username, $password);
         }
        catch(LogicException $e){
            echo $e;
            exit;
        }
        
        catch(AccountException $e){
            echo $e;
            exit;
        }
        if(AccountController::isLogin())
            echo "$username is logged in";
        header('Location: ../index.php');
        exit;
    }?>

<!DOCTYPE html>

<div class="row">
    <div class="span5">
        <h3>Sign In</h3>
        <p>
        <form name="logon" id="logon" action="signIn.php" method="POST" >
            Username: <input type="text" name="user" id ="user"><br>
            Password: <input type="password" name="userpassword" id="userpassword"><br>
            <div class="btn-group">
            <input class="btn btn-primary" type="submit" value="Sign In">
            </div> 
            <!-- <input class="btn btn-primary" type="submit" id="editButton" value="Sign In"> -->
        </form>
        </p>
    </div>
    <div class ="span5">
        <h3>Haven't Tripped Out?</h3>
        <div class="btn-group">
            <a href="#" class="btn btn-primary" id="registerGoButton">
                Register Now
            </a>
        </div>
    </div>
</div>

<!-- jQuery to load signUp.php page into mainContent div of index.php -->
<script>
    $('#registerGoButton').on("click",function(){
        $('div.row').parent().load('Views/signUp.php');
    });
</script>