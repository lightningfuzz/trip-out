<?php

require_once '../Models/destination.php';
require_once '../DAOs/destinationDAO.php';

//$dest = new Destination();
//$dest->setAddress("555 Jingle St.");
//$dest->setAvgRating(0);
//$dest->setName("Food Hut");
//$dest->setNumImages(1);
//$dest->setNumVideos(0);
//$dest->setType(2);
//$dest->setDescription("A place for Food");
//$dest->setImageUrl("../media/images/hp9.JPG");
//$dest->setCity("San Francisco");
//$dest->setState("California");
//$dest->setzipCode("94132");
//$dest->setnumReviews(0);
//if(DestinationDAO::create($dest) == null)
//        echo "error! <br>";
//echo $dest;
//
//
//
//$dest1 = new Destination();
//$dest1->setAddress("333 Pop St.");
//$dest1->setAvgRating(0);
//$dest1->setName("The Greatest Hotel");
//$dest1->setNumImages(1);
//$dest1->setNumVideos(0);
//$dest1->setType(3);
//$dest1->setDescription("We have nice beds!");
//$dest1->setImageUrl("../media/images/shopping3.JPG");
//$dest1->setnumReviews(0);
//$dest1->setCity("Oakland");
//$dest1->setState("California");
//$dest1->setzipCode("94xxx");
//if(DestinationDAO::create($dest1) == null)
//        echo "error! <br>";
//
//$dest = new Destination();
//$dest->setAddress("111 Park Rd.");
//$dest->setAvgRating(0);
//$dest->setName("Very Green Park");
//$dest->setNumImages(1);
//$dest->setNumVideos(0);
//$dest->setType(1);
//$dest->setDescription("We have trees!");
//$dest->setImageUrl("../media/images/landmark4.JPG");
//$dest->setnumReviews(0);
//$dest->setCity("San Francisco");
//$dest->setState("California");
//$dest->setzipCode("94132");
//if(DestinationDAO::create($dest) == null)
//        echo "error! <br>";
//
//$dest = new Destination();
//$dest->setAddress("Castro St.");
//$dest->setAvgRating(0);
//$dest->setName("Fun time event!");
//$dest->setNumImages(1);
//$dest->setNumVideos(0);
//$dest->setType(4);
//$dest->setDescription("Come party with us");
//$dest->setImageUrl("../media/images/landmark4.JPG");
//$dest->setnumReviews(0);
//$dest->setCity("Los Gatos");
//$dest->setState("California");
//$dest->setzipCode("9xxxx");
//if(DestinationDAO::create($dest) == null)
//        echo "error! <br>";

$dest = DestinationDAO::getByID(23);
if($dest == null) echo "error";
echo $dest;



?>
