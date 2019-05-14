<?php

include "printImage.php";
include "searchObject.php";
include "Lvl1PlantDisplay.php";

$name = "Forbush Memorial"; 
    
$Objects = new searchObject(); 
$values = $Objects->bedSearchByName($name); 
  
echo(sizeof($values)); 

?>