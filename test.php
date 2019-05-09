<?php

include "searchObject.php";
include "Lvl1PlantDisplay.php";
$Ob = new searchObject();

// $arr = array();

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


// $charac = $Ob->getCharacteristicsOf("Adiantum pedatum");
// Lvl1PlantDisplay($charac);
// for ($x = 0; $x<sizeof($charac);$x++){
//     echo $charac[$x] . "    ";
// }

// $charac = $Ob->getCharacteristicsOf("Adiantum pedatum");

// for ($x = 0; $x<sizeof($charac);$x++){
//     echo $charac[$x] . "    ";
// }
// echo metaphone("Adiantum pedatum");
// echo "\n";
// echo metaphone("Adiantum pedatun");
// echo "\n";
// echo metaphone("Adintum pedatum");
// echo "\n";
// echo metaphone("Adiantum edatum");
// echo "\n";
// $str1 = "Ad']iantum)";
// $str2 = " Adiantum";

// echo $str1;
// echo "\n";
// echo $str2;
// echo "\n";
// echo metaphone($str1);
// echo "\n";
// $str1 = metaphone($str1);
// echo "\n";
// echo metaphone($str2);
// echo "\n";
// $str2 = metaphone($str2);
// echo "\n";
// // echo ("Sander");

// $sim = similar_text($str1, $str2, $perc);
// echo "similarity: $sim ($perc %)\n";

$arr = $Ob->searchArrayByLatinName("plantCharacteristics", "thor");
echo "\nddd";
echo metaphone("tho");
echo "\nddd";
$sim = similar_text(metaphone("Xanthorhiza simplicissima"), metaphone("Xanthorhiza simplicissima"), $perc);
//echo metaphone("Xanthorhiza simplicissima");
echo "similarity: $sim ($perc %)\n";
for ($x = 0; $x<sizeof($arr);$x++){

    echo $arr[$x][1] . "    ";
}
echo sizeof($arr);
//echo $Ob->getCharacteristicsOf("Xanthorhiza simplicissima");
?>