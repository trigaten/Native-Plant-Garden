
<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="homepage.css">
        
                  <div class="topbar-right">
                  <form action="siteSearch.php" method="get">
                                <select name="searchType">
                                        <option value="commonName">Common Name</option>
                                        <option value="latinName">Latin Name</option>
                                        <option value="growthForm">Growth Form</option>
                                        <option value="family">Family</option>
                                        <option value="bloomType">Bloom Type</option>
                                        <option value="wildlifeStatus">Wildlife Status</option>
                                        <option value="endangered">Endangered</option>
                                        <option value="wholeDatabase">Whole Database</option>
                                      </select>
                            <a><input type="text" placeholder="Search.." name = "query"></a>
                            </form> 
                            </div>
                            </html>

<?php 
include "searchObject.php";
include "Lvl1PlantDisplay.php";

    echo "<link rel='stylesheet' type='text/css' href='page.css'> ";
    echo " <meta name='viewport' content='width=device-width, initial-scale=1'> ";

$searcher = new searchObject();
$Ob = new searchObject();

$query = $_GET["query"];
$searchType = $_GET["searchType"];
    // echo $query;
    // echo $searchType;


$column;

switch($searchType){
case  "latinName":
$column = 0;
break;
case  "commonName":
$column = 1;
break;
case  "growthForm":
$column = 3;
break;
case  "family":
$column = 4;
break;
case  "bloomType":
$column = 6;
break;
case  "wildlifeStatus":
$column = 10;
break;
case  "endangered":
$column = 11;
break;

case "wholeDatabase":
$column = -1;
break;

}

$results =  $Ob->smartSearch($query, $column);
echo sizeof($results) . " results found for \"" . $query . "\"  in " . $searchType;
usort($results, "cmp");
for ($x = sizeof($results)-1; $x>-1;$x--){
    
    
    $current =  $results[$x];
    $info = $current[0];
    
    echo Lvl1PlantDisplay($info);
    //echo $current[1];
    echo "     ";
}



function cmp($a, $b)
{
    return ($a[1] > $b[1]);
}

?>

