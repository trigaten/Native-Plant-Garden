

<?php
//.gets location of plant in spreadsheet
$plantName = "gourd";
$latinName = "gourdous plantanous";
$image = "Imagepathblahblah";

$family = "";
$growthForm = "";
$bloomTime = "";
$wetlandStatus = "";
$endangered = "";

include "getImage.php";
include "printImage.php";
function displayLvl1($plant){
$plantname = $plant;
$directory_plantname = 'images/'.$plantname.".jpg";
//echo $directory_plantname;
if (file_exists($directory_plantname)) {
    echo "<table style='width:100%'>";
        echo '<tr><img src=' .$directory_plantname. " alt='error'>";
        echo "<td>$plantname</td>";
        echo "<td>$latinname</td>";
        echo "<td>$family</td>";
        echo "<td>$growthform</td>";
        echo "<td>$bloomTime</td>";
        echo "<td>$wetlandStatus</td>";
        echo "<td>$endangered</td>";
        echo "</tr>";

     } 
    else{
        $link =  getUrl($plantname);
        $destdir = 'images/';
        $img=file_get_contents($link);
        file_put_contents($destdir.substr($plantname . ".jpg", strrpos("hahaha",'/')), $img);
        $imgloc = "images/$plantname".".jpg";
        echo '<img src="' . $imgloc . '" alt="error">'; 
    }
}




// <tr></tr><td>&nbsp;&nbsp;&nbsp;Common Name: <?php echo escape($rowS["CommonName"]);?></td>
// <tr></tr><td>&nbsp;&nbsp;&nbsp;Bloom Time: <?php echo escape($rowS["BloomTime"]); ?></td>
// <tr></tr><td>&nbsp;&nbsp;&nbsp;Wetland Status: <?php echo escape($rowS["WetlandStatus"])?></td>
// <tr></tr><td>&nbsp;&nbsp;&nbsp;Endangered: <?php echo escape($rowS["Endangered"])?></td>
// <tr></tr><td>&nbsp;&nbsp;&nbsp;<a href="<?php echo escape($rowS["Link"]); ?>">Click here for more information</a><br><br></td> </tr>
       
?>