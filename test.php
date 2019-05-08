<?php

include "searchObject.php";

$Ob = new searchObject();

$arr = array();

// array_push($arr, "ff", "fff", "ff", "ggff", "3333ff");

// $getRet = $Ob->searchArrayFor($arr, "ff");
// echo $getRet[0];
// echo sizeof($getRet);

// for ($x = sizeof($getRet)-1; $x>-1;$x--){
//     echo $getRet[$x] . "mmm";
// }


// $arr = $Ob->bedSearch(3);

// for ($x = 0; $x<sizeof($arr);$x++){
//     echo $arr[$x][0] . "    ";
// }
// echo sizeof($arr);


$charac = $Ob->getCharacteristicsOf("Adiantum pedatum");

for ($x = 0; $x<sizeof($charac);$x++){
    echo $charac[$x] . "    ";
}
$charac = $Ob->getCharacteristicsOf("Adiantum pedatum");

for ($x = 0; $x<sizeof($charac);$x++){
    echo $charac[$x] . "    ";
}
?>