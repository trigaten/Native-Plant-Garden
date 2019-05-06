<?php

class searchObject {

    private $query;
    private $queryWords;
    private $plantingLog;
    private $plantCharacteristics;

    function __construct() {

        $arrayGetter = new arrayDownloader(); 
        $this->plantingLog = $arrayGetter->getPlantingLog();
        $this->plantCharacteristics = $arrayGetter->getPlantCharacteristics();
        $this->query = "Plantanus Robbinus";
        $this->queryWords = explode(" ", $this->query);

    }

    function stringSearch($query){
        $this->query = $query;
        $this->queryWords = explode(" ", $query);
        $rowsFound = array();

        foreach ($this->plantingLog as $row) {
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

        foreach ($this->plantCharacteristics as $row) {
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