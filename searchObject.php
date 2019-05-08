<?php
include "arrayDownloader.php";
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
        $rowsFoundLog = searchArrayFor($this->plantingLog, $query);
        $rowsFoundCharacteristics = searchArrayFor($this->plantCharacteristics, $query);
        
    }

    function searchArrayFor($array, $query){// returns rows where a match is found
    //can be improved
  //  echo "dd";

        $returnArray = array();
        foreach ($array as $row) {
            for ($i = 0; $i < sizeof($row); $i++) {//stops here
                //$found = false;
                echo "dd";
                    //if ($found == false){
                        array_push($returnArray, $row);
                        if (strpos($row[$i], "$query") !== false) {
                            $found = true;
                            array_push($returnArray, $row);
                                  }              
               // }
                //$found = false;
                }
            
            
        }
        array_push($returnArray, "ff");
        return $returnArray;
    }

    function plantSearch($query){



    }

}
?>