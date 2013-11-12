<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tag
 *
 * @author Jung Hwan Kim
 */
class Tag {
    
    private $destId;
    private $keywordId;
    
    public function setDestId($destId){
        $this->destId = $destId;
    }
    public function setKeywordId($keywordId){
        $this->keywordId = $keywordId;
    }
    
    public function getDestId(){
        return $this->destId;
    }
    public function getKeywordId(){
        return $this->keywordId;
    }
    
    //put your code here
}

?>
