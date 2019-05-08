<?php

include "searchObject.php";

$Ob = new searchObject();

$arr = array();

array_push($arr, "ff", "fff", "ff", "ggff", "3333ff");

$getRet = $Ob->searchArrayFor($arr, "ff");
echo $getRet[0];
echo sizeof($getRet);

for ($x = sizeof($getRet)-1; $x>-1;$x--){
    echo $getRet[$x] . "mmm";
}


?>