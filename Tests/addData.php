<?php

require_once '../Models/Image.php';
require_once '../DAOs/ImageDAO.php';
require_once '../Models/Video.php';
require_once '../DAOs/VideoDAO.php';

//
//$video = new Image();
//$video->setDestId(26);
//$video->setUserId(4);
//$video->setTitle("title");
//$video->setDescription("description goes here");
//$video->setRelUrl('/some_url/goeshear.mov');
//if(!VideoDAO::create($video)) echo "upload error <br>";
//
//$video = new Image();
//$video->setDestId(26);
//$video->setUserId(2);
//$video->setTitle("title2");
//$video->setDescription("description goes here2");
//$video->setRelUrl('/some_url2/goeshear.mov');
//if(!VideoDAO::create($video)) echo "upload error <br>";


$images = VideoDAO::getByDestId(26);
if(!$images) echo "error";

foreach($images as  $img){
    echo $img . "<br>";
}

?>
