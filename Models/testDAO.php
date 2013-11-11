<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test
 *
 * @author michael
 */
class testDAO extends \dbConnect {
    //put your code here
    
    private function __construct(){
        parent::__construct();
    }
    
    public static function getDestinations(){
        $result = getInstance()->query("SELECT * FROM destination");
        return mysql_fetch_array($result);
    }
}

?>
