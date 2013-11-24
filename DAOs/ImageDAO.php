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

    public static function create($image) {
        $db = dbConnet::getInstance();
        $q = "INSERT INTO review (user_id, dest_id, relUrl, "
                . "title, description, uploadTime,) VALUES ('"
                . $image->getUserId() . "', '" . $image->getDestId() . "', '"
                . $image->getRelUrl() . "', '" . $image->getTitle() . "', '"
                . $image->getDescription() . "', '" . $image->getUploadTime() . "')";


        if (!$db->query($q))
            return null;
        $user->setUserID($db->insert_id);

        return $user;
    }

    public static function getByDestId($integer) {
         $db = dbConnect::getInstance();
        //query
        $q = "SELECT * FROM registered_user WHERE user_id =" . $id;

        if (!$result = $db->query($q)) return null;
        
        $arr = mysqli_fetch_array($result);
        $ru = new RegisteredUser();
        $ru->setUserID($arr["user_id"]);
        $ru->setUserName($arr["user_name"]);
        $ru->setPassword($arr["password"]);
        $ru->setRegTime($arr["reg_time"]);
        $ru->setLastLoginTime($arr["last_login_time"]);
        $ru->setEmail($arr["email"]);
        $ru->setNumReviews($arr["num_reviews"]);
        
        return $ru;
    }

}

?>
