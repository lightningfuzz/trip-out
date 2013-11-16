<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of review
 *
 * @author Jung Hwan Kim
 */
class Review {
    private $userId;
    private $destId;
    private $rating;
    private $numYesHelpful;
    private $numNoHelpful;
    private $comment;
    private $time;
    
    public function setUserId($userId){
        $this->userId = $userId;
    }
    public function setDestId($destId){
        $this->destId = $destId;
    }
    public function setRating($rating){
        $this->rating = $rating;
    }
    public function setNumYesHelpful($numYesHelpful){
        $this->numYesHelpful = $numYesHelpful;
    }
    public function setNumNoHelpful($numNoHelpful){
        $this->numNoHelpful = $numNoHelpful;
    }
    public function setComment($comment){
        $this->comment = $comment;
    }
    public function setTime($time){
        $this->time = $time;
    }
    
    public function getUserId(){
        return $this->userId;
    }
    public function getDestId(){
        return $this->destId;
    }
    public function getRating(){
        return $this->rating;
    }
    public function getNumYesHelpful(){
        return $this->numYesHelpful;
    }
    public function getNumNoHelpful(){
        return $this->numNoHelpful;
    }
    public function getComment(){
        return $this->comment;
    }
    public function getTime(){
        return $this->time;
    }
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
    //put your code here
}

?>
