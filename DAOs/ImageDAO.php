<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ImageDAO
 *
 * @author Jung Hwan Kim
 */
class ImageDAO {
    
    private function __construct(){
    }

    /**
     * creates a new user account; returns a new user id.
     * @param $user is the new image object
     * @return the $image object with a new user id; return null if failed
     */
    public static function create($image) {
        $db = dbConnet::getInstance();
        $q = "INSERT INTO review (user_id, dest_id, relUrl, "
                . "title, description, uploadTime,) VALUES ('"
                . $image->getUserId() . "', '" . $image->getDestId() . "', '"
                . $image->getRelUrl() . "', '" . $image->getTitle() . "', '"
                . $image->getDescription() . "', '" . $image->getUploadTime() . "')";


        if (!$db->query($q))
            return null;
       

        return $image;
    }

    /**
     * searches the registered_user table by id
     * @param $id the user id
     * @return a Image object if found; else return null
     */
    public static function getByDestId($integer) {
        $db = dbConnect::getInstance();
        //query
        $q = "SELECT * FROM Image WHERE user_id =" . $integer;

        if (!$result = $db->query($q))
            return null;
        $images = array();
        while($arr = mysqli_fetch_array($result)) {
            $image = new Image();
            $image->setUserId($arr["user_id"]);
            $image->setDestId($arr["dest_id"]);
            $image->setRelUrl($arr["relUrl"]);
            $image->setTitle($arr["title"]);
            $image->setDescription($arr["description"]);
            $image->setUploadTime($arr["uploadTime"]);
            $images[] = $image;
        }

        return $images;
    }

}

?>
