<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of destinationDAO
 *
 * @author Deon
 */
require_once("../dbConnect.php");

//singleton class
class DestinationDAO {

    //private construct
    private function __construct() {
        
    }

    /**
     * creates a new user account; returns a new user id.
     * @param $user is the new RegisteredUser object
     * @return the $user object with a new user id; return null if failed
     */
    public static function create(Destination $dest) {

        $db = dbConnect::getInstance();
        //query
        $q = "INSERT INTO destination (type, name, address, "
                . "avg_rating, num_images, num_videos, description, image_url, num_reviews) VALUES ('"
                . $dest->getType() . "', '" . $dest->getName() . "', '"
                . $dest->getAddress() . "', '" . $dest->getAvgRating() . "', '"
                . $dest->getNumImages() . "', '" . $dest->getNumVideos() . "', '"
                . $dest->getDescription() . "', '" . $dest->getImageUrl() . "', '"
                . $dest->getNumReviews() . "')";

        if (!$db->query($q)) return null;
        $dest->setDestId($db->insert_id);

        return $dest;
    }

    /**
     * searches the registered_user table by id
     * @param $id the user id
     * @return a RegisteredUser object if found; else return null
     */
    public static function getByID($id) {

        $db = dbConnect::getInstance();
        //query
        $q = "SELECT * FROM destination WHERE dest_id =" . $id;

        if (!$result = $db->query($q)) return null;
        
        $arr = mysqli_fetch_array($result);
        $dest = new Destination();
        $dest->setDestId($arr["dest_id"]);
        $dest->setType($arr["type"]);
        $dest->setName($arr["name"]);
        $dest->setAddress($arr["address"]);
        $dest->setAvgRating($arr["avg_rating"]);
        $dest->setNumImages($arr["num_images"]);
        $dest->setNumVideos($arr["num_videos"]);
        $dest->setDescription($arr["description"]);
        $dest->setImageUrl($arr["image_url"]);
        $dest->setNumReviews($arr["num_reviews"]);
        
        return $dest;
    }
    
    public static function update(Destination $dest){

        $db = dbConnect::getInstance();
        //query
        $q = "UPDATE destination SET  type = '" . $dest->getType() . "', name = '" . $dest->getName() 
            . "', address = '" . $dest->getAddress() . "', avg_rating = '" . $dest->getAvgRating()
                . "', num_images = '" . $dest->getNumImages() . "', num_videos = '" . $dest->getNumVideos()
                . "', description = '" . $dest->getDescription() . "', num_reviews = '" . $dest->getNumReviews()
                . "', image_url = '" . $dest->getImageUrl() . "' WHERE dest_id = " . $dest->getDestId() . "";

        if(!$db->query($q)) return null;

        return $dest;
    }
    
    public static function delete($id) {
        
        $db = dbConnect::getInstance();
        
        $q = "DELETE FROM destination WHERE dest_id = " . $id;
        
        if ($db->query($q))
            return true;
        else
            return false;
    }
}

?>
