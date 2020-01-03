<?php
/** object which contains a number of functions that deal with search the database and returning accurate results
*/

include "arrayDownloader.php";
class searchObject {
 
    private $query;
    private $queryWords;
    private $plantingLog;
    private $plantCharacteristics;

    /** constructor */
    function __construct() {
        $arrayGetter = new arrayDownloader(); 
        $this->plantingLog = $arrayGetter->getPlantingLog();
        $this->plantCharacteristics = $arrayGetter->getPlantCharacteristics();
        $this->query = "Plantanus Robbinus"; //initialize query word to random string
        $this->queryWords = explode(" ", $this->query); //initializes an array of n strings where n will be the number of words separated by spaces in $query 
    }

    /** takes an int which represents one of the beds and returns a 2d array containing all 
     * plants and their info that are in that bed */
    function bedSearchbyNumber($bedNumber){
        $returnArray = array();

        foreach ($this->plantingLog as $row) {
            if ($row[9] == $bedNumber){
                array_push($returnArray, $row);
            }
        }
        return $returnArray;
    }

    /** takes a string which is the name of one of the beds and returns a 2d array containing all 
     * plants and their info that are in that bed */
    function bedSearchByName($bedName){
        $returnArray = array();

        foreach ($this->plantingLog as $row) {
            if ($row[1] == $bedName){
                array_push($returnArray, $row);
            }
        }
        return $returnArray; 
    }
    
    /** takes 2d array and a keyword and returns a smaller 2d array that contains all rows in which a match was found*/
    function searchArrayFor($array, $query){
        //can be improved by implementing a binary search
            $returnArray = array();
            foreach ($array as $row) {
                for ($i = 0; $i < sizeof($row); $i++) {
                    $found = false;
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
            return $returnArray;
        }

    /** takes the latin name of a plant and returns the row with its characteristics */
    function getCharacteristicsOf($latinName){
        $fixedLatinName = str_replace(array('\'', '"'), '', $latinName); 

        foreach ($this->plantCharacteristics as $row) {
            $fixedRowSpot = str_replace(array('\'', '"'), '', $row[0]); 
             if ($fixedLatinName == $fixedRowSpot)
            {
                return $row;
        }
    }
    return "Nottus Foundous"; //what gets returned if nothing is found  (notttt and actual plant name)
    }

/** SEARCH ENGINE METHOD - takes a word to search for and a column (like family or common name) represented 
 * as a number and returns the closest results using a number of strategies including phonetic similarity
 * (how similar words sound if spoken) and Levenstein distances
 * This method could use some significant fine tuning
*/
function smartSearch($query, $column)
{
    if ($column == -1){
        $column = 0;
    } 

    $query = strtolower($query);
    $totalPointsPossible = 100;
    $columnArray = $this->plantCharacteristics[$column]; //1D array of plant names or whatever the column is that is being searched
    $scoreArray = array();
    for ($x = 0; $x < sizeof($columnArray); $x++){
        array_push($scoreArray, 0.0);
    }

    //score adding
    $counter = 0;
    foreach ($this->plantCharacteristics as $row) {

        //tests if search query is contained in cell
       if (strpos(strtolower($row[$column]), strtolower($query)) !== false) {
        $scoreArray[$counter] += 70;
        }
        //tests if metaphone (search query) is contained in cell
        if (strpos(metaphone($row[$column]), metaphone($query)) !== false) {
        $scoreArray[$counter] += 65;
        }
        //adds the % similarity found between query and cell
        $sim = similar_text($row[$column], $query, $perc);
        $scoreArray[$counter] += $perc;
        //adds the % similarity found between metaphone(query) and metaphone(cell)
        $sim = similar_text(metaphone($row[$column]), metaphone($query), $perc);
        $scoreArray[$counter] += $perc;

        if ((strpos($query, " ") !== false) && (strpos($row[$column], " ") !== false))
        {
        $explodedQuery = explode($query, " ");
        $explodedIndexValue = explode($row[$column], " ");
        if (sizeof($explodedQuery) > 1 && sizeof($explodedIndexValue) > 1)
        {
            $limit = min(sizeof($explodedQuery), sizeof($explodedIndexValue));
           
           for ($x = 0; $x < $limit; $x++){
             if (metaphone($explodedQuery[$x]) == metaphone($explodedIndexValue[$x])){
                $scoreArray[$counter] += 75;
             }
           }  
        }
    }

        $counter++;
    }
    
     $returnArray = array();

    $counter = 0;
    foreach ($this->plantCharacteristics as $row) {
        if ($scoreArray[$counter] >= 100){
            $ret = array($row, $scoreArray[$counter]);
            array_push($returnArray, $ret);
        }
         $counter++;
     }
    
    return $returnArray;
    
} //the end of this long search engine method lol


//*********************** 
//ALL CODE BELOW IS NOT WORKING (but should be worked on in future)
//*********************** 

function stringSearch($query){ //incomplete //user
        $this->query = $query;
        $this->queryWords = explode(" ", $query);
        // $rowsFoundLog = searchArrayFor($this->plantingLog, $query);
        // $rowsFoundCharacteristics = searchArrayFor($this->plantCharacteristics, $query);
        
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
}
?>