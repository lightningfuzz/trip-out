<?php

require_once '../Models/Destination.php';
require_once '../DAOs/DestinationDAO.php';
require_once '../Models/Keyword.php';
require_once '../DAOs/KeywordDAO.php';
require_once '../Models/Tag.php';
require_once '../DAOs/TagDAO.php';

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

//$dest = DestinationDAO::getByID(23);
//if($dest == null) echo "error";
//echo $dest;

//add keywords
//$key = new Keyword();
//$key->setWord("san");
//if(KeywordDAO::create($key) == null) echo "error";
//
//$key = new Keyword();
//$key->setWord("francisco");
//if(KeywordDAO::create($key) == null) echo "error";
//
//$key = new Keyword();
//$key->setWord("oakland");
//if(KeywordDAO::create($key) == null) echo "error";
//
//$key = new Keyword();
//$key->setWord("food");
//if(KeywordDAO::create($key) == null) echo "error";
//
//$key = new Keyword();
//$key->setWord("hut");
//if(KeywordDAO::create($key) == null) echo "error";
//
//$key = new Keyword();
//$key->setWord("los");
//if(KeywordDAO::create($key) == null) echo "error";
//
//$key = new Keyword();
//$key->setWord("gatos");
//if(KeywordDAO::create($key) == null) echo "error";
//
//$key = new Keyword();
//$key->setWord("greatest");
//if(KeywordDAO::create($key) == null) echo "error";
//
//$key = new Keyword();
//$key->setWord("hotel");
//if(KeywordDAO::create($key) == null) echo "error";
//
//$key = new Keyword();
//$key->setWord("very");
//if(KeywordDAO::create($key) == null) echo "error";
//
//$key = new Keyword();
//$key->setWord("green");
//if(KeywordDAO::create($key) == null) echo "error";
//
//$key = new Keyword();
//$key->setWord("park");
//if(KeywordDAO::create($key) == null) echo "error";
//
//$key = new Keyword();
//$key->setWord("fun");
//if(KeywordDAO::create($key) == null) echo "error";
//
//$key = new Keyword();
//$key->setWord("time");
//if(KeywordDAO::create($key) == null) echo "error";
//
//$key = new Keyword();
//$key->setWord("event");
//if(KeywordDAO::create($key) == null) echo "error";
//
//$key = new Keyword();
//$key->setWord("bay");
//if(KeywordDAO::create($key) == null) echo "error";
//
//$key = new Keyword();
//$key->setWord("area");
//if(KeywordDAO::create($key) == null) echo "error";

//if(!$key = KeywordDAO::getByWord("francisco")) echo "error";
//echo $key;

//$tag = new Tag();
//$tag->setDestId(22);
//$tag->setKeywordId(1);
//TagDAO::create($tag);
//
//$tag = new Tag();
//$tag->setDestId(22);
//$tag->setKeywordId(2);
//TagDAO::create($tag);
//
//$tag = new Tag();
//$tag->setDestId(22);
//$tag->setKeywordId(4);
//TagDAO::create($tag);
//
//$tag = new Tag();
//$tag->setDestId(22);
//$tag->setKeywordId(5);
//TagDAO::create($tag);
//
//$tag = new Tag();
//$tag->setDestId(22);
//$tag->setKeywordId(16);
//TagDAO::create($tag);
//
//$tag = new Tag();
//$tag->setDestId(22);
//$tag->setKeywordId(17);
//TagDAO::create($tag);
//
////
//$tag = new Tag();
//$tag->setDestId(23);
//$tag->setKeywordId(8);
//TagDAO::create($tag);
//
//$tag = new Tag();
//$tag->setDestId(23);
//$tag->setKeywordId(9);
//TagDAO::create($tag);
//
//$tag = new Tag();
//$tag->setDestId(23);
//$tag->setKeywordId(16);
//TagDAO::create($tag);
//
//$tag = new Tag();
//$tag->setDestId(23);
//$tag->setKeywordId(17);
//TagDAO::create($tag);
//
//$tag = new Tag();
//$tag->setDestId(24);
//$tag->setKeywordId(1);
//TagDAO::create($tag);
//
//$tag = new Tag();
//$tag->setDestId(24);
//$tag->setKeywordId(2);
//TagDAO::create($tag);
//
//$tag = new Tag();
//$tag->setDestId(24);
//$tag->setKeywordId(10);
//TagDAO::create($tag);
//
//$tag = new Tag();
//$tag->setDestId(24);
//$tag->setKeywordId(11);
//TagDAO::create($tag);
//
//$tag = new Tag();
//$tag->setDestId(24);
//$tag->setKeywordId(12);
//TagDAO::create($tag);
//
//$tag = new Tag();
//$tag->setDestId(24);
//$tag->setKeywordId(16);
//TagDAO::create($tag);
//
//$tag = new Tag();
//$tag->setDestId(24);
//$tag->setKeywordId(17);
//TagDAO::create($tag);
//
//$tag = new Tag();
//$tag->setDestId(25);
//$tag->setKeywordId(13);
//TagDAO::create($tag);
//
//$tag = new Tag();
//$tag->setDestId(25);
//$tag->setKeywordId(14);
//TagDAO::create($tag);
//
//$tag = new Tag();
//$tag->setDestId(25);
//$tag->setKeywordId(15);
//TagDAO::create($tag);

//$tag = new Tag();
//$tag->setDestId(25);
//$tag->setKeywordId(16);
//TagDAO::create($tag);
//
//$tag = new Tag();
//$tag->setDestId(25);
//$tag->setKeywordId(17);
//TagDAO::create($tag);
//
//$tag = new Tag();
//$tag->setDestId(25);
//$tag->setKeywordId(6);
//TagDAO::create($tag);
//
//$tag = new Tag();
//$tag->setDestId(25);
//$tag->setKeywordId(7);
//TagDAO::create($tag);


//$tags = TagDAO::getByKeywordID(1);
//
//foreach($tags as $tag)
//    echo $tag . "<br>";

$dest = new Destination();
$dest->setAddress("555 Jingle St.");
$dest->setAvgRating(0);
$dest->setName("Food Hut");
$dest->setNumImages(1);
$dest->setNumVideos(0);
$dest->setType(2);
$dest->setDescription("A place for Food");
$dest->setImageUrl("../media/images/hp9.JPG");
$dest->setCity("San Francisco");
$dest->setState("California");
$dest->setzipCode("94132");
$dest->setnumReviews(0);
$dest->setDestId(22);
$dest->setWebsite("http://website.com");
$dest->setPhoneNumber("5555555555");
DestinationDAO::update($dest);
echo DestinationDAO::getByID(22);








?>
