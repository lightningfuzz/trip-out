<?php
require_once("../dbConnect.php");

//singleton class
class registeredUserDAO {

    //private construct
    private function __construct() {  
    }

    private static $instance = null;
    
    public static function getInstance() {
        if (!self::$instance instanceof self) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    /**
     * creates a new user account; user_id 
     * @param $user is 
     * @return
     */
    public function create(registeredUser $user) {

        $db = dbConnect::getInstance();
        //query
        $q = "INSERT INTO registered_user ('user_name', 'password', 'reg_time', "
                . "'last_login_time', 'email', 'num_reviews') VALUES ('" 
                . $user->getUserName() . "', '" . $user->getPassword() . "', '"
                . $user->getRegTime() . "', '" . $user->getLastLoginTime() . "', '"
                . $user->getEmail() . "', '" . $user->getNumReviews(). "')";

        $result = $db->query($q);
        $user->setUserID($db->insert_id);
        return $user;
    }
}

?>
