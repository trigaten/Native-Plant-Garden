


<?php
include "printImage.php";
// <!-- <link rel="stylesheet" type="text/css" href="page.css"> -->
// <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
function Lvl1PlantDisplay($arr){

  $plantName = $arr[1];
  $latinName = $arr[0];
  //$image = $arr[];

  $family = $arr[4];
  $growthForm = $arr[3];
  $bloomTime = $arr[6];
  $wetlandStatus = $arr[10];
  $endangered = $arr[11];
  //$src = "images/$latinName.jpg";

  $srcString = printImage($latinName);
  // $latinName 
  // <link rel='stylesheet' type='text/css' href='page.css'> 
  // <meta name='viewport' content='width=device-width, initial-scale=1'>
return "

    <table color= black> 
      <tr> 
        <td height='10' colspan='3'>$plantName</td>
      </tr>
      <tr>
        <td height='120' width='120'><img width='100%' height='100%' src='$srcString' alt='er2ror'></td>
        <td padding-left = none>
          <ul style='list-style-type:none'>
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

