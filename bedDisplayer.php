<?php
include "searchObject.php";
include "Lvl1PlantDisplay.php"; 

//$bedPictures = array(); //array of pictures of the bed

$title = "Staircase";

$searcher = new SearchObject(); 
$searchArray = $searcher->bedSearchByName($title); //Creates array of all Latin Names in specific garden
echo(count($searchArray));
echo("hi");

//$currentPlant = $searchArray[1]; 
//echo($currentPlant); 


?>