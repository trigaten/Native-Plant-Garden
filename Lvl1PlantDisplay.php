<?php 
?>
<link rel="stylesheet" type="text/css" href="page.css">
<html><meta name="viewport" content="width=device-width, initial-scale=1">

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

        echo "<table>"; 
        echo "</tr>"; 
        echo ("<td>$plantName</td>");
        echo ("<td>$latinName</td>");
        echo ("<td>$family</td>");
        echo ("<td>$growthForm</td>");
        echo ("<td>$bloomTime</td>");
        echo ("<td>$wetlandStatus</td>");
        echo ("<td>$endangered</td>");
        ?><td><!-- Trigger/Open The Modal -->
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
                     echo ("<td>$endangered</td>");?></p>
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
        </td><?php
        echo "</tr>";
        
        echo "<tr>"; 
        echo ("<td>$plantName</td>");
        echo ("<td>$latinName</td>");
        echo ("<td>$family</td>");
        echo ("<td>$growthForm</td>");
        echo ("<td>$bloomTime</td>");
        echo ("<td>$wetlandStatus</td>");
        echo "</tr>";
        
        echo "</table>"; 

       


   

include "getImage.php";
include "printImage.php";
//function displayLvl1($plant){
//$plantname = $plant; 
//echo $directory_plantname;    
  
?>

