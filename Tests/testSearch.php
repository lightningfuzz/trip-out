<?php

require_once '../Controllers/SearchController.php';
$search = new Search("bay area park");
$result = $search->run();

foreach($result as $dest){
    echo $dest . "<br>";
}

?>
