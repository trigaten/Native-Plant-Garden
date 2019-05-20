<?php 
include "searchObject.php";
include "Lvl1PlantDisplay.php";
echo "<link rel='stylesheet' type='text/css' href='page.css'> ";
echo " <meta name='viewport' content='width=device-width, initial-scale=1'> ";
$searcher = new searchObject();

$query = $_GET["query"];
echo $query;
$searchType = $_GET["searchType"];
echo $searchType;
$column;

switch($searchType){
case  "latinName":
$column = 0;
break;
case  "commonName":
$column = 1;
break;
case  "growthForm":
$column = 3;
break;
case  "family":
$column = 4;
break;
case  "bloomType":
$column = 6;
break;
case  "wildlifeStatus":
$column = 10;
break;
case  "endangered":
$column = 11;
break;

case "wholeDatabase":
$column = -1;
break;

}
$Ob = new searchObject();
//echo "ddd";
$blah =  $Ob->smartSearch($query, $column);
echo sizeof($blah);
//echo metaphone("fdsfdsfdsfds");
usort($blah, "cmp");
for ($x = sizeof($blah)-1; $x>-1;$x--){
    
    
    $current =  $blah[$x];
    $info = $current[0];
    
    echo Lvl1PlantDisplay($info);
    echo $current[1];
    echo "     ";
}
// $results = $searcher->smartSearch($query, 0);
// for ($x = sizeof($$results)-1; $x>-1;$x--){
    
    
//     $current =  $results[$x];
//     $info = $current[0];
    
//     echo $info[1];
//     echo $current[1];
//     echo "     ";
// }
// echo sizeof($results);
// for ($x = 0; x < sizeof($results); $x++){
//     $current = $result[$x];
//     //$info = $current[0];
//     echo $current[0];
//     //echo "T";
    
// //echo Lvl1PlantDisplay($info);
// }

//echo "llllll";


function cmp($a, $b)
{
    return ($a[1] > $b[1]);
}

?>