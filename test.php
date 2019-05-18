<?php
//include "scoreObject.php";
//include "searchObject.php";

include "printImage.php";


$latinName = "Adiantum pedatum";
$src = printImage($latinName);
echo "<img src='$src' >";
//include "Lvl1PlantDisplay.php";
//include "Lvl1PlantDisplay.php";
// $Ob = new searchObject();
// //echo "ddd";
// $blah =  $Ob->smartSearch("dwarf blueberry", 1);
// echo sizeof($blah);
// //echo metaphone("fdsfdsfdsfds");

// for ($x = sizeof($blah)-1; $x>-1;$x--){
    
    
//     $current =  $blah[$x];
//     $info = $current[0];
    
//     echo $info[1];
//     echo $current[1];
//     echo "     ";
// }
// $current = new scoreObject();
// $info = $current->getInfo();
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

//  $charac = $Ob->smartSearch("b");
// echo sizeof($charac);
// for ($x = 0; $x<sizeof($charac);$x++){
//     $arr = $charac[$x];
//     echo $arr;
//     // for ($y = 0; $y<sizeof($arr);$y++){
//     // echo $arr[$y] . "   ";
//     // }
//     echo "/n";
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

// $arr = $Ob->searchArrayByLatinName("plantCharacteristics", "thor");
// echo "\nddd";
// echo metaphone("tho");
// echo "\nddd";
// $sim = similar_text("tone", "lone", $perc);
// //echo metaphone("Xanthorhiza simplicissima");
// echo "similarity: $sim ($perc %)\n";
// // for ($x = 0; $x<sizeof($arr);$x++){
// echo metaphone("tho");

//     echo $arr[$x][1] . "    ";
// }
// echo sizeof($arr);
//echo $Ob->getCharacteristicsOf("Xanthorhiza simplicissima");

// if (strpos("Aronia arbutifolia ‘Brilliantissima’", "ar") !== false) {
//     echo "gotem";
//     }



// $UserInput = "Panicum virgatum 'Squaw'";
// $FileName = str_replace(array('\'', '"'), '', $UserInput); 
// echo $FileName;
// echo $t;
// echo "\n";
// echo str_replace("\"", "f", $t);
// echo "\n";
// echo str_replace('"', "", $t);
// echo "\n";
// echo str_replace("&#39", "", $t);
// echo "\n";
// echo str_replace("", "&#39", $t);
// echo "\n";
// echo preg_replace("/<!--.*?-->''/", "", $t);
// echo "\n";
// echo trim($t, "' '");


// for ($x = 0; $x < sizeof($t); $x++){
//     if ($t[$x] == "/&#39")
//     $t[$x] = " ";
// }
// $t[sizeof($t)] = " ";
// echo "\n$t"
?>