<?php
//hard
include "arrayDownloader.php";
include "scoreObject.php";
class searchObject {

    private $query;
    private $queryWords;
    private $plantingLog;
    private $plantCharacteristics;

    function __construct() { //computer

        $arrayGetter = new arrayDownloader(); 
        $this->plantingLog = $arrayGetter->getPlantingLog();
        $this->plantCharacteristics = $arrayGetter->getPlantCharacteristics();
        $this->query = "Plantanus Robbinus";
        $this->queryWords = explode(" ", $this->query);

    }

    function bedSearch($bedNumber){ //computer //returns rows of $bedNumber in plantingLog
        $returnArray = array();

        foreach ($this->plantingLog as $row) {
            if ($row[9] == $bedNumber){
                array_push($returnArray, $row);
            }
        }
        return $returnArray;
    }
    
    function searchArrayFor($array, $query){// returns rows where a match is found //computer
        //can be improved
            $returnArray = array();
            foreach ($array as $row) {
                for ($i = 0; $i < sizeof($row); $i++) {//stops here
                    $found = false;
                    echo "dd";
                        if ($found == false){
                            array_push($returnArray, $row);
                            if (strpos($row[$i], "$query") !== false) {
                                $found = true;
                                array_push($returnArray, $row);
                                      }              
                    }
                    $found = false;
                    }
                
                
            }
            array_push($returnArray, "ff");
            return $returnArray;
        }

    function getCharacteristicsOf($latinName){ //returns characteristics of $latinName //computer

        foreach ($this->plantCharacteristics as $row) {
            if ($row[0] == $latinName){
         

                return $row;

            
        }
    }
    return "Nottus Foundus";
    }

//BELOW IS NOT NOT haha
    function stringSearch($query){ //incomplete //user
        $this->query = $query;
        $this->queryWords = explode(" ", $query);
        $rowsFoundLog = searchArrayFor($this->plantingLog, $query);
        $rowsFoundCharacteristics = searchArrayFor($this->plantCharacteristics, $query);
        
    }

//TODO
function searchArrayByLatinName($array, $latinNameQuery){ //takes a possibly innaccurate query //can take string or array //user
$searchArray = array();
$returnArray = array();

    if ($array == $this->plantingLog){
        $searchArray = $this->plantingLog;
    } else{
        if ($array == $this->plantCharacteristics){
            $searchArray = $this->plantCharacteristics;
        } else{
            $searchArray = $array;
        }
    }

    foreach ($this->$searchArray as $row) {
       $latinName = $row[0];
       $latinName = metaphone($latinName);
       $latinNameQuery = metaphone($latinNameQuery);

       $sim = similar_text($latinName, $latinNameQuery, $perc);
       if ($latinName == "Amsonia tabernaemontana"){
        //array_push($returnArray, $row);
       }
       if ($perc >= 91){
        array_push($returnArray, $row);
       }
        }
    return $returnArray;
}



function smartSearch($query)
{
    $column = 0;
    $totalPointsPossible = 100;;
    $columnArray = $this->plantCharacteristics[0];
    $scoreArray = array();
    for ($x = 0; $x < sizeof($columnArray); $x++){
        array_push($scoreArray, 0.0);
    }
    for ($x = 0; $x < sizeof($columnArray); $x++){
        if (strpos($columnArray[x][0], $query) !== false) {
            array_push($scoreArray[$x], 100.0);
        }
    }

    $returnArray = array();

    for ($x = 0; $x < sizeof($scoreArray); $x++){
        if ($scoreArray[$x] >= 0) {
            //$sob = new searchObject($scoreArray[$x], $scoreArray[$x]);
            array_push($returnArray, $scoreArray[$x]);
        }
    }
    array_push($returnArray, ["dd", "dd"]);
    
    return $returnArray;
}


}
?>