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
                <h3>Sign Up</h3>
                <p>
                <form name="logon" action="index.php" method="POST" >
                    Username: <input type="text" name="user"><br>
                    Email: <input type="text" name="email"><br> 
                    Password  <input type="password" name="userpassword"><br>
                    Confirm Password <input type="password" name="confirmpassword"><br>
                    
                    <?php
                        /*
                        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                            if (!$logonSuccess)
                            echo "Invalid name and/or password";
                         
                        }*/
                    ?>

                    <input class="btn btn-default" type="submit" id="editButton" value="Sign Up!">
                </form>
                </p>
         </div>
     </div>
</div>
</html>
       


