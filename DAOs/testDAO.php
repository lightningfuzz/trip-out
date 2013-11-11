<?php
require_once("../dbConnect.php");

//test comment
class testDAO{
    //put your code here
    
    public static function getDestinationsById($id){
        
        $result = dbConnect::getInstance()->query("SELECT * FROM destination Where dest_id = " . $id);
        return mysqli_fetch_array($result);
    }
}

?>
