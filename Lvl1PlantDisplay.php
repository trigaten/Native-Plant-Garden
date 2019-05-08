<?php ?>
<link rel="stylesheet" type="text/css" href="page.css">
<html><meta name="viewport" content="width=device-width, initial-scale=1">

<?php
//include "getImage.php";
//include "printImage.php";
//.gets location of plant in spreadsheet


function Lvl1PlantDisplay($arr){

  $plantName = "gourd";
$latinName = "gourdous plantanous";
$image = "Imagepathblahblah";

$family = "yam";
$growthForm = "yamyam";
$bloomTime = "yamyamyam";
$wetlandStatus = "yam^4";
$endangered = "yam^5";
    
    ?>

    <table style="width:100%"> 
      <tr> 
        <td colspan="3">$plantName</td>
      </tr>
      <tr>
        <td><img src="pic_trulli.jpg" alt="Italian Trulli"></td>
        <td>
          <ul style="list-style-type:none">
          <li>Family: <?php echo($family)?></li>
          <li>Growth Form: <?php echo($growthForm)?></li>
          <li>Bloom Time: <?php echo($bloomTime)?></li>
          <li>Wetland Status: <?php echo($wetlandStatus)?></li>
          <li>Endangered: <?php echo($endangered)?></li>
          </ul>  
        </td>
        <td><!-- Trigger/Open The Modal -->
        <button id="myBtn">Open Modal</button>
        
        <!-- The Modal -->
        <div id="myModal" class="modal">
        
          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            <p><?php echo "<table>"; 
                     echo "</tr>"; 
                     echo ("<td>$plantName</td>");
                     echo ("<td>$latinName</td>");
                     echo ("<td>$family</td>");
                     echo ("<td>$growthForm</td>");
                     echo ("<td>$bloomTime</td>");
                     echo ("<td>$wetlandStatus</td>");
                     echo ("<td>$endangered</td>");
                     echo "</tr>"; 
                     echo "</table>";?></p>
          </div>
        
        </div>
        <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
        modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
        modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
        modal.style.display = "none";
        }
        }
        </script>
        </td>
      </tr>
      </table>
        
        <?php }
        
       


   


//function displayLvl1($plant){
//$plantname = $plant; 
//echo $directory_plantname;    
  
?>

