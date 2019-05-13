<?php ?>
<html>

<link rel="stylesheet" type="text/css" href="page.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php

function Lvl1PlantDisplay($arr){

  $plantName = $arr[1];
  $latinName = $arr[0];
  //$image = $arr[];

  $family = $arr[4];
  $growthForm = $arr[3];
  $bloomTime = $arr[6];
  $wetlandStatus = $arr[10];
  $endangered = $arr[11];
    
    ?>

    <table color= black> 
      <tr> 
        <td height="10" colspan="3">$plantName</td>
      </tr>
      <tr>
        <td height="120" width="120"><img width="100%" height="100%" src='images/Rosa virginiana.jpg' alt="error"></td>
        <td padding-left = none>
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
            <p><?php ?> <table>
                     </tr> 
                     <td><?php echo($plantName);?></td>
                     </tr>"; 
                     </table>";?></p>
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

