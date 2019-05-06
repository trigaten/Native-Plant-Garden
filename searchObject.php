<?php

class searchObject {

    private $query = "Plantanus Robbinus";
    private $queryWords = explode(" ", $query);
    private $arrayGetter;
    private $plantingLog;
    private $plantCharacteristics;

    function __construct() {

        $arrayGetter = new arrayDownloader(); 
        $plantingLog = $arrayGetter->getPlantingLog();
        $plantCharacteristics = $arrayGetter->getPlantCharacteristics();

    }

    function stringSearch($query){

        $queryWords = explode(" ", $query);
        $rowsFound = array();
        
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

    function plantSearch($query){



    }

}
?>