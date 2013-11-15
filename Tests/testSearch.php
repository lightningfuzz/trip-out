<?php

require_once '../Controllers/search.php';
$search = new Search("bay area hotel");
$result = $search->run();

foreach($result as $dest){
    echo $dest . "<br>";
}



?>
