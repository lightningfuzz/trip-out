<?php

require_once("../DAOs/registeredUserDAO.php");
$result = RegisteredUserDAO::delete($_POST['userId']);
if($result == false)
    echo "Failed to delete user " . $_POST['userId'];
else
    header('Location: listAll.php');

?>
