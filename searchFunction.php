<?php


$query = "Plantanus Robbinus";
$queryWords = explode(" ", $query);

$arrayGetter = new arrayDownloader(); 
    $values = $arrayGetter->getPlantingLog();




?>