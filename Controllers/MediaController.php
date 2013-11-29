<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MediaController
 *
 * @author Jung Hwan Kim
 */

require_once("../DAOs/ImageDAO.php");
require_once("../DAOs/VideoDAO.php");
require_once '../Controllers/DestinationController.php';

class MediaController {

    //private construct

    private function __construct() {
        
    }

    /**
     * adds a review to the database; currently only one review per destinatin is allowed
     * increments number of reviews for destination and updates average rating for destination
     * @param $rev the Review object
     * @throws ReviewException if review already exists, or rating is missing
     * @return the review object if success
     */
    public static function add(Media $media) {
        
        if (ImageDAO::getByUserIdAndDestId($media->getUserId(), $media->getDestId()))
            throw new ReviewException("Review already exists <br>"); //review exists
        
        if (!$media->getRating())
            throw new ReviewException("Missing rating <br>");
       
        //save the review time
        $media->setUploadTime(date("Y-m-d H:i:s"));
        
        if (!$media = ImageDAO::create($media))
            throw new ReviewException("Review could not be added to database");
        
        $dest = MediaController::getById($media->getDestId());
        //increment numReviews of destination
        $dest = MediaController::incrementNumMedia($dest);
       
        
        return $media;
    }
    
    /**
     * retrieves all reviews for a given destination
     * @param $dest the Destination object
     * @return array of Review objects if success. Empty array or null upon failure.
     */
    public static function getDestinationMedia(Destination $dest) {

        return ImageDAO::getByDestId($dest->getDestId());
    }
    
    public static function delete(Media $media){
        
        if(!$media = ImageDAO::delete($media))
                return $media;
        
        $dest = MediaController::getById($media->getDestId());
        
        
        return $media;
    }

}

?>
