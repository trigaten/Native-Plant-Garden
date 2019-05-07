

<?php
//.gets location of plant in spreadsheet
$plantName = "gourd";
$latinName = "gourdous plantanous";
$image = "Imagepathblahblah";

$family = "yam";
$growthForm = "yamyam";
$bloomTime = "yamyamyam";
$wetlandStatus = "yam^4";
$endangered = "yam^5";

echo($family); 

//include "getImage.php";
//include "printImage.php";
function displayLvl1($plant){
$plantname = $plant; 
//echo $directory_plantname;
    echo "<table style='width:100%'><tr>";
        echo "<td>$plantname</td>";
        echo "<td>$latinname</td>";
        echo "<td>$family</td>";
        echo "<td>$growthform</td>";
        echo "<td>$bloomTime</td>";
        echo "<td>$wetlandStatus</td>";
        echo "<td>$endangered</td>";
        echo "</tr>";}
  
?>