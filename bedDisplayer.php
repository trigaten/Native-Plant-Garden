<?php


include "searchObject.php";
include "Lvl1PlantDisplay.php";


$name = "Forbush Memorial"; 
$name = $_GET['Name'];

$Objects = new searchObject(); 
$values = $Objects->bedSearchByName($name); 
  
echo(sizeof($values) . " results found for bed $name\n<br>\n<br>"); 
$lastLatinName = ""; //ensures no repetition
for ($x = 0; $x < sizeof($values); $x++){
if ($lastLatinName != $values[$x][0])
echo Lvl1PlantDisplay($Objects->getCharacteristicsOf($values[$x][0]))."\n";
$lastLatinName = $values[$x][0];
}
?>