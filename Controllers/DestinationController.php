<?php
/**
 * Description of DestinationController
 *
 * @author michael
 */
require_once '../DAOs/DestinationDAO.php';
require_once '../Models/Destination.php';
require_once '../Controllers/KeywordController.php';
require_once '../Exceptions/DestinationException.php';

class DestinationController{
    
    //Parameter: a destination object
    //This class adds the given destination to the database.
    //Then calls a function to generate keywords for given destination
    private function __construct(){}
    
    public static function create(Destination $dest){
        
        //if certian fields are missing, throw exception
        if( !$dest->getName() || !$dest->getCity()
                || !$dest->getAddress() || !$dest->getState() || !$dest->getType())
            
            throw new DestinationException("Missing Name, Address, City, or State");
        
        // create destination in database, get newly created object back with new ID
        $dest = DestinationDAO::create($dest);
        
        // Pass destination to keyword controller to create keywords
        KeywordController::createFromDestination($dest);
        
        return $dest;
            
    }
}

?>
