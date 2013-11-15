<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of destination
 *
 * @author Jung Hwan Kim
 */
class Destination {
    
    private $destId;
    private $type;
    private $name;
    private $address;
    private $avgRating;
    private $numImage;
    private $numVideo;
    private $description;
    private $imageUrl;
    private $numReviews;
    
    public function setDestId($destId){
        $this->destId = $destId;
        
    }
    
    public function setType($type){
        $this->type = $type;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setAddress($address){
        $this->address = $address;
    }
    public function setAvgRating($avgRating){
        $this ->avgRating = $avgRating;
    }
    public function setNumImages($numImage){
        $this->numImage = $numImage;
        
    }
    public function setNumVideos($numVideo){
        $this->numVideo = $numVideo;
    }
    public function setDescirption($description){
        $this->description = $description;
    }
    public function setImageUrl($imageUrl){
        $this->imageUrl = $imageUrl;
    }
    public function setNumReviews($numReviews){
        $this->numReviews = $numReviews;
    }
    
    public function getDestId(){
        return $this->destId;
    }
    public function getType(){
        return $this->type;
    }
    public function getName(){
        return $this->name;
    }
    public function getAddress(){
        return $this->address;
    }
    public function getAvgRating(){
        return $this->avgRating;
    }
    public function getNumImages(){
        return $this->numImage;
    }
    public function getNumVideos(){
        return $this->numVideo;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getImageUrl(){
        return $this->imageUrl;
    }
    public function getNumReviews(){
        return $this->numReviews;
    }
    //put your code here
    
    public function __toString() {
        $s = "";
        $s .= "<table>\n";
        $s .= "<tr><td colspan=2><hr></td></tr>\n";
        foreach (get_class_vars(get_class($this)) as $name => $value) {
            $s .= "<tr><td>$name:</td><td>" . $this->$name . "</td></tr>\n";
        }
        $s .= "<tr><td colspan=2><hr></td></tr>\n";
        $s .= "</table>\n";
        return $s;
    }
}

?>
