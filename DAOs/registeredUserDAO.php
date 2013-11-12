<?php

require_once("../dbConnect.php");

//singleton class
class RegisteredUserDAO {

    //private construct
    private function __construct() {
        
    }

    /**
     * creates a new user account; user_id 
     * @param $user is 
     * @return
     */
    public static function create(RegisteredUser $user) {

        $db = dbConnect::getInstance();
        //query
        $q = "INSERT INTO registered_user (user_name, password, reg_time, "
                . "last_login_time, email, num_reviews) VALUES ('"
                . $user->getUserName() . "', '" . $user->getPassword() . "', '"
                . $user->getRegTime() . "', '" . $user->getLastLoginTime() . "', '"
                . $user->getEmail() . "', '" . $user->getNumReviews() . "')";

        if (!$db->query($q)) return null;
        $user->setUserID($db->insert_id);

        return $user;
    }

    /**
     * returns an RegisteredUser object
     * @param $id the user id
     * @return a RegisteredUser object
     */
    public static function getByID($id) {

        $db = dbConnect::getInstance();
        $ru = new RegisteredUser();
        //query
        $q = "SELECT * FROM registered_user WHERE user_id =" . $id;

        if (!$result = $db->query($q)) return null;

        $var = mysqli_fetch_array($result);
        $ru->setUserID($var["user_id"]);
        $ru->setUserName($var["user_name"]);
        $ru->setPassword($var["password"]);
        $ru->setRegTime($var["reg_time"]);
        $ru->setLastLoginTime($var["last_login_time"]);
        $ru->setEmail($var["email"]);
        $ru->setNumReviews($var["num_reviews"]);
        
        return $ru;
    }
    
    public static function update(RegisteredUser $user){

        $db = dbConnect::getInstance();
        //query
        $q = "UPDATE registered_user SET  ('user_name' = " . $user->getUserName() . ", 'password' = " . $user->getPassword() 
            . "'reg_time' =  " . $user->getRegTime() . ", 'last_login_time' = " . $user->getLastLoginTime()
                . "'email' = " . $user->getEmail() . ", 'num_reviews' = " . $user->getNumReviews()
                . ") WHERE 'user_id = " . $user->getUserID() . "'";

        if(!$db->query($q)) return null;

        return $user;
    }

}

?>
