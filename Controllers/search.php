<?php

require_once '../Models/destination.php';
require_once '../DAOs/destinationDAO.php';
require_once '../Models/keyword.php';
require_once '../DAOs/keywordDAO.php';
require_once '../Models/tag.php';
require_once '../DAOs/tagDAO.php';

class Search {
    
    private $searchString;
    
    public function __construct($string) {
        $this->searchString = $string;
    }
    
    //Returns an array of sorted destination objects sorted by relevence.
    //If nothing found, returns an empty array.
    public function run(){
        
        //initialize array of destination ids
        $destinationIds = array();
        
        //initialize array of destination instances
        $destinations = array();
        
        //save each word of stringSearch into an array as lowercase word
        $keyWords = explode(" ", strtolower($this->searchString));
        
        foreach($keyWords as $word){
            
            //fin the keyword ID associated with the word
            $key = KeywordDAO::getByWord($word);
            
            // get array of destination ids associated with the keyword ID
            // and merge with existing array of ids
            $tags = TagDAO::getByKeywordID($key->getKeywordId());
            $ids = array();
            foreach($tags as $tag){
                $ids[] = $tag->getDestId();
            }
            $destinationIds = array_merge($destinationIds, $ids); 
        }
        
        //count duplicate dest_ids, and consolidate
        $destinationIds = array_count_values($destinationIds);
        
        //sort in descending value by most occurences
        arsort($destinationIds);
        
        //lookup destinations by id and save object to array
        foreach($destinationIds as $destId => $count){
            $destObject = destinationDAO::getByID($destId);
            if($destObject != null){
                $destinations[] = $destObject;
            }
        }
        
        return $destinations;
    }
    
}

?>
