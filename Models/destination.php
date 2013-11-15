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
    public function setNumImage($numImage){
        $this->numImage = $numImage;
        
    }
    public function setNumVideo($numVideo){
        $this->numVideo = $numVideo;
    }
    public function setDescirption($description){
        $this->description = $description;
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
    public function getNumImage(){
        return $this->numImage;
    }
    public function getNumVideo(){
        return $this->numVideo;
    }
    public function getDescription(){
        return $this->description;
    }
    //put your code here
}

?>
