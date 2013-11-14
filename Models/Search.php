<?php

class Search {
    
    private $searchString;
    
    public function __construct($string) {
        $this->searchString = $string;
    }
    
    public function run(){
        
        //initialize array of destination ids
        $destinationIds = array();
        
        //initialize array of destination instances
        $destinations = array();
        
        //save each word of stringSearch into an array as lowercase word
        $keyWords = explode(" ", strtolower(searchString));
        
        foreach($keyWords as $word){
            
            //fin the keyword ID associated with the word
            $keyId = keywordDAO::getId($word);
            
            // get array of destination ids associated with the keyword ID
            // and merge with existing array of ids
            $destinationIds = array_merge($destinationIds, tagDAO::getdestId($keyId));  
        }
        
        //count duplicate dest_ids, and consolidate
        $destinationIds = array_count_values($destinationIds);
        
        //sort in descending value by most occurences
        arsort($destinationIds);
        
        //lookup destinations by id and save object to array
        foreach($destinationIds as $destId => $count){
            $destObject = destinationDAO::getByID($destId);
            if($destObject != null){
                $destinations[] = destObject;
            }
        }
        
        return $destinations;
    }
    
}

?>
