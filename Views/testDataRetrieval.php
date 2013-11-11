
<?php require_once("../Models/testDAO.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $destinations = testDAO::getDestinations();
        $string = $destinations;
        print "Result of Destination Query: ";
        ?>
    </body>
</html>
