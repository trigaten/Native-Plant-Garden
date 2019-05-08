<?php
include "printImage.php";
//include "arrayDownloader.php";
include "searchObject.php";
include "Lvl1PlantDisplay.php";
echo $_GET['Name']."<br><br>";
    $Ob = new searchObject();
    $arrayGetter = new arrayDownloader(); 
    $values = $arrayGetter->getPlantingLog();
    if (empty($values)) {
        print 'No data found.\n';
    } else {

        foreach ($values as $row) {
            if ($row[1] == $_GET["Name"]){
            for ($i = 0; $i < sizeof($row); $i++) {
                if ($i != 1 && $i != 9 && $row[$i] != null){
                    //echo $row[$i]." -- ";
                    $latinName = $row[0];
                    $res = $Ob->getCharacteristicsOf($latinName);
                    Lvl1PlantDisplay($res);

                }
                }
                // echo printImage($row[0]);
                echo "<br>";
            }
            
        }
    }
    
?>
