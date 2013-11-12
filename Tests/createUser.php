<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //add user
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap.css">
        <link rel ="stylesheet" type ="text/css" href ="../css/custom.css">
        <title></title>
    </head>
    <body padding-left="3px">
        
        <form action="createUser.php" method="POST" id="createNewUser">
            Your name: <input type="text" name="userName"/><br/><br>
            Password: <input type="password" name="password"/><br/><br>
            Email: <input type="text" name="email"/><br><br>
            <input class ="btn btn-primary" type="submit"/>
    </body>
</html>
