<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of keyword
 *
 * @author Jung Hwan Kim
 */
class keyword {
    private $keywordId;
    private $word;
    
    public function setKeywordId($keywordId){
        $this->keywordId = $keywordId;
    }
    public function setWord($word){
        $this->word = $word;
    }
    public function getKeywordId(){
        return $this->keywordId;
    }
    public function getWord(){
        return $this->word;
    }
}

?>
