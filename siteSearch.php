<?php 
include "searchObject.php";

$searcher = new searchObject();

$query = $_GET["query"];
echo $query;
$searchType = $_GET["searchType"];
echo $searchType;
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

$searcher->smartSearch($query, $column);


echo "llllll";



?>