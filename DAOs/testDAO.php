<?php
require_once("../dbConnect.php");

class testDAO{
    //put your code here
    
    public static function getDestinationsById($id){
        //$link = mysqli_connect("sfsuswe.com", "f13g05", "pewpew13", "student_f13g05");
        $result = dbConnect::getInstance()->query("SELECT * FROM destination Where dest_id = " . $id);
        return mysqli_fetch_array($result);
    }
}

?>
