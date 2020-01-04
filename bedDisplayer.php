<?php
/** displays all plant info in a single bed (used when a bed is clicked on in the map) */

include "searchObject.php";     
include "Lvl1PlantDisplay.php";

echo "<link rel='stylesheet' type='text/css' href='page.css'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";

$name = "Forbush Memorial"; 
$name = $_GET['Name'];

$Objects = new searchObject(); 
$values = $Objects->bedSearchByName($name); 

echo(sizeof($values) . " results found for bed $name\n<br>\n<br>"); 
$lastLatinName = ""; //empty string ensures no repetition
for ($x = 0; $x < sizeof($values); $x++){
if ($lastLatinName != $values[$x][0]){
$characteristics = $Objects->getCharacteristicsOf($values[$x][0]);
if ($characteristics[0] != "N")
echo Lvl1PlantDisplay($characteristics)."\n";
    }
$lastLatinName = $values[$x][0];
}
?>