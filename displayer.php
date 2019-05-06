<?php
include "printImage.php";
include "arrayDownloader.php";
echo $_GET['Name']."<br><br>";

    $arrayGetter = new arrayDownloader(); 
    $values = $arrayGetter->getPlantingLog();
    if (empty($values)) {
        print 'No data found.\n';
    } else {

        foreach ($values as $row) {
            if ($row[1] == $_GET["Name"]){
            for ($i = 0; $i < sizeof($row); $i++) {
                if ($i != 1 && $i != 9 && $row[$i] != null){
                    echo $row[$i]." -- ";
                }
                }
                echo printImage($row[0]);
                echo "<br>";
            }
            
        }
    }
    
?>
