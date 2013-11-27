<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VideoDAO
 *
 * @author Jung Hwan Kim
 */
class VideoDAO {

    /**
     * creates a new user account; returns a new user id.
     * @param $user is the new image object
     * @return the $video object with a new user id; return null if failed
     */
    public static function create() {
        $db = dbConnet::getInstance();
        $q = "INSERT INTO review (user_id, dest_id, relUrl, "
                . "title, description, uploadTime,) VALUES ('"
                . $video->getUserId() . "', '" . $video->getDestId() . "', '"
                . $video->getRelUrl() . "', '" . $video>getTitle() . "', '"
                . $video->getDescription() . "', '" . $video->getUploadTime() . "')";


        if (!$db->query($q))
            return null;
       

        return $video;
    }
    /**
     * searches the registered_user table by id
     * @param $id the user id
     * @return a Video object if found; else return null
     */
    public static function getByDestId($ingeter) {
        $db = dbConnect::getInstance();
        //query
        $q = "SELECT * FROM Video WHERE user_id =" . $integer;

        if (!$result = $db->query($q))
            return null;

        $videos = array();
        while ($arr = mysqli_fetch_array($result)) {
            $video = new Image();
            $video->setUserId($arr["user_id"]);
            $video->setDestId($arr["dest_id"]);
            $video->setRelUrl($arr["relUrl"]);
            $video->setTitle($arr["title"]);
            $video->setDescription($arr["description"]);
            $video->setUploadTime($arr["uploadTime"]);
            $videos = $video;
        }

        return $videos;
    }

}

?>
