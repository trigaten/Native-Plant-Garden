

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

include "getImage.php";
include "printImage.php";
function displayLvl1($plant){
$plantname = $plant; 
//echo $directory_plantname;
    echo "<table style='width:100%'>";
        echo '<tr><img src=' .$directory_plantname. " alt='error'>";
        echo "<td>$plantname</td>";
        echo "<td>$latinname</td>";
        echo "<td>$family</td>";
        echo "<td>$growthform</td>";
        echo "<td>$bloomTime</td>";
        echo "<td>$wetlandStatus</td>";
        echo "<td>$endangered</td>";
        echo "</tr>";}



// <tr></tr><td>&nbsp;&nbsp;&nbsp;Common Name: <?php echo escape($rowS["CommonName"]);?></td>
// <tr></tr><td>&nbsp;&nbsp;&nbsp;Bloom Time: <?php echo escape($rowS["BloomTime"]); ?></td>
// <tr></tr><td>&nbsp;&nbsp;&nbsp;Wetland Status: <?php echo escape($rowS["WetlandStatus"])?></td>
// <tr></tr><td>&nbsp;&nbsp;&nbsp;Endangered: <?php echo escape($rowS["Endangered"])?></td>
// <tr></tr><td>&nbsp;&nbsp;&nbsp;<a href="<?php echo escape($rowS["Link"]); ?>">Click here for more information</a><br><br></td> </tr>
       
?>