<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of accountManager
 *
 * @author deon
 */
require_once("../DAOs/ReviewDAO.php");
require_once '../Exceptions/ReviewException.php';

class ReviewController {

    //private construct

    private function __construct() {
        
    }

    /**
     * adds a review to the database; currently only one review per destinatin is allowed
     * @param $rev the Review object
     * @throws ReviewException if review already exists
     * @return the review object if success
     */
    public static function add(Review $rev) {
        
        if (ReviewDAO::getByUserIdAndDestId($rev->getUserId(), $rev->getDestId()))
            throw new ReviewException(); //review exists
       
        //save the review time
        $rev->setTime(date("Y-m-d H:i:s"));
        
        return ReviewDAO::create($rev);
    }
    
    /**
     * retrieves all reviews for a given destination
     * @param $dest the Destination object
     * @return the array of Review objects if success. Empty array or null upon failure.
     */
    public static function getDestinationReviews(Destination $dest) {

        return ReviewDAO::getByDestId($dest->getDestId());
    }
    
    public static function delete(Review $rev){
        
        return ReviewDAO::delete($rev);
    }

}

?>
