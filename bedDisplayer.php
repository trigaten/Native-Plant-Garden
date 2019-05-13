<?php

include "printImage.php";
include "searchObject.php";
include "Lvl1PlantDisplay.php";

$name = "Forbush Memorial"; 
    
$Object = new searchObject(); 
$values = $Object->bedSearchByName($name); 
  
echo(sizeof($values)); 

?>