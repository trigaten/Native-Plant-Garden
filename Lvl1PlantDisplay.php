


<?php
include "printImage.php";

function Lvl1PlantDisplay($arr){

  $latinName = $arr[0];
  $plantName = $arr[1];
  
  //$image = $arr[];

  $family = $arr[4];
  $growthForm = $arr[3];
  $bloomTime = $arr[6];
  $wetlandStatus = $arr[10];
  $endangered = $arr[11];
  //$src = "images/$latinName.jpg";

  $srcString = printImage($latinName);


return "

    <table color= black> 
      <tr> 
        <td height='10' colspan='3'><center>$plantName</center></td>
      </tr>
      <tr>
        <td height='120' width='120'><img width='100%' height='100%' src='$srcString' alt='er2ror'></td>
        <td padding-left = none>
          <ul style='list-style-type:none'>
          <li>Latin Name: $latinName</li>
          <li>Family: $family</li>
          <li>Growth Form: $growthForm</li>
          <li>Bloom Time: $bloomTime</li>
          <li>Wetland Status:$wetlandStatus</li>
          <li>Endangered: $endangered</li>
          </ul>  
        </td>
        
      </tr>
      </table>";
}

?>

