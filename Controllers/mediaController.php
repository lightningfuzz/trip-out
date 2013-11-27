<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mediaController
 * This file user shall control the media such as video or image
 * add video, add image, delte video, delte video depending on destination.
 * 
 * @author Jung Hwan Kim
 */
require_once '../Models/Image.php';
require_once '../Models/Video.php';
require_once '../DAOs/ImageDAO.php';
require_once '../DAOs/VideoDAO.php';

class mediaController {

    private function __construct() {
        
    }

    public static function addImage(Image $img) {

        if (ImageDAO::getByDestId($img->getDestId()))
            throw new ReviewException("Image already exists <br>"); //review exists
        //save the image time
        $img->setUploadTime(date("Y-m-d H:i:s"));

        if (!$img = ImageDAO::create($img))
            throw new ReviewException("Image could not be added to database");

        $dest = DestinationController::getById($img->getDestId());
        //increment numReviews of destination
       

        return $img;
    }
    
    
    public static function getDestinationImages(Destination $dest) {

        return ImageDAO::getByDestId($dest->getDestId());
    }

    public static function deleteImage(Image $img) {

        if (!$img = ImageDAO::delete($img))
            return $img;

        $dest = DestinationController::getById($img->getDestId());

        

        return $img;
    }

    public static function addVideo(Video $vid) {

        if (VideoDAO::getByDestId($vid->getDestId()))
            throw new ReviewException("The Video already exists <br>"); //review exists
        //save the video time
        $vid->setUploadTime(date("Y-m-d H:i:s"));

        if (!$vid = VideoDAO::create($vid))
            throw new ReviewException("Review could not be added to database");

        $dest = DestinationController::getById($vid->getDestId());
        //increment numReviews of destination
        

        return $vid;
    }
    
    
    
    

    public static function getDestinationVideos(Destination $dest) {

        return ImageDAO::getByDestId($dest->getDestId());
    }

    public static function deleteVideo(Video $vid) {

        if (!$vid = VideoDAO::delete($vid))
            return $vid;

        $dest = DestinationController::getById($vid->getDestId());

        //calculate and update average rating of destination
        DestinationController::calcAvgRating($dest);

        return $vid;
    }

}
?>
