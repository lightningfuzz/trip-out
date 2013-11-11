
<?php require_once("../Models/testDAO.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $destinations = testDAO::getDestinationsById(1);
        print $destinations['name'];
        ?>
    </body>
</html>
