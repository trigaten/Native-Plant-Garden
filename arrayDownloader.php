<?php
require_once 'google-api-php-client-2.2.2/vendor/autoload.php';
class arrayDownloader {
    
	private $client;
    private $service;
    private $spreadsheetId;
 
	function __construct($spreadsheetId = "1v6i3MFlBfTom7p_WZHs-hK850D2pTg2kk4XJbrLlkd8") {
        $this->client = new \Google_Client(); // setting up client
        $this->client->setApplicationName('PlantApp');
        $this->client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
        $this->client->setAccessType('offline');
        $this->client->setAuthConfig(__DIR__ . '/servicekey.json');
        $this->service = new Google_Service_Sheets($this->client);
        $this->spreadsheetId = $spreadsheetId;
    }
    
    function getPlantingLog(){
        $range = 'Planting Log';
        $response = $this->service->spreadsheets_values->get($this->spreadsheetId, $range);
        $values = $response->getValues();
            
        return $values;
            }
            
    function testFunc(){

        return "test";
    }
}
//require_once 'google-api-php-client-2.2.2/vendor/autoload.php'; // getting necessary files
// function init(){
//     $client = new \Google_Client(); // setting up client
//     $client->setApplicationName('PlantApp');
//     $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
//     $client->setAccessType('offline');
//     $client->setAuthConfig(__DIR__ . '/servicekey.json');
//     $service = new Google_Service_Sheets($client);
//     $spreadsheetId = "1v6i3MFlBfTom7p_WZHs-hK850D2pTg2kk4XJbrLlkd8";

// }
//     function getPlantingLog(){
// init();

//     $range = 'Planting Log';
//     $response = $service->spreadsheets_values->get($spreadsheetId, $range);
//     $values = $response->getValues();
    
//     return $values;
//     }

//     function getPlantCharacteristics(){
// init();
//     $range = 'Plant characteristics and notes';
//     $response = $service->spreadsheets_values->get($spreadsheetId, $range);
//     $values = $response->getValues();
    
//     return $values;
//     }
?>
