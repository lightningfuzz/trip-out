<?php
require_once("../dbConnect.php");

class testDAO{
    //put your code here
    
    
    public static function getDestinations(){
        $result = dbConnect::getInstance()->query("SELECT * FROM destination");
        $row = mysql_fetch_assoc($result);
        return $result;
    }
}

?>
