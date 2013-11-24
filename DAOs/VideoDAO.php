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

    public static function create() {
        $db = dbConnect::getInstance();
        //query
        $q = "INSERT INTO registered_user (user_name, password, reg_time, "
                . "last_login_time, email, num_reviews) VALUES ('"
                . $user->getUserName() . "', '" . $user->getPassword() . "', '"
                . $user->getRegTime() . "', '" . $user->getLastLoginTime() . "', '"
                . $user->getEmail() . "', '" . $user->getNumReviews() . "')";

        if (!$db->query($q))
            return null;
        $user->setUserID($db->insert_id);

        return $user;
    }

    public static function getByDestId() {
        
    }

}

?>
