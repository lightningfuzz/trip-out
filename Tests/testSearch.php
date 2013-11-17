<?php

require_once '../Controllers/SearchController.php';
$search = new Search("food");
$result = $search->run();

foreach($result as $dest){
    echo $dest . "<br>";
}

?>
