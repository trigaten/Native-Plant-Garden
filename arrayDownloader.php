<?php
  /** Object that contains the 2d arrays of the planting log and plant characteristics charts */
require_once 'google-api-php-client-2.2.2/vendor/autoload.php';
class arrayDownloader {
    
	private $client;
    private $service;
    private $spreadsheetId;
    
    /** constructor */
	function __construct() {
        $this->client = new \Google_Client(); // setting up client
        $this->client->setApplicationName('PlantApp');
        $this->client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
        $this->client->setAccessType('offline');
        $this->client->setAuthConfig(__DIR__ . '/servicekey.json');
        $this->service = new Google_Service_Sheets($this->client);
        $this->spreadsheetId = "1v6i3MFlBfTom7p_WZHs-hK850D2pTg2kk4XJbrLlkd8";
    }
    /** returns 2d planting log array as it is in Google Sheet*/
    function getPlantingLog(){
        $range = 'Planting Log';
        $response = $this->service->spreadsheets_values->get($this->spreadsheetId, $range);
        $values = $response->getValues();
            
        return $values;
            }

    /** returns 2d plant characteristics array as it is in Google Sheet*/
    function getPlantCharacteristics(){
        $range = 'Plant characteristics and notes';
        $response = $this->service->spreadsheets_values->get($this->spreadsheetId, $range);
        $values = $response->getValues();
        return $values;
            }


    //Unimportant        
    /** tests that stuff is working (will probably raise some error when run if things are setup incorrectly)*/
    function testFunc(){
        $client = new \Google_Client();
        $client->setApplicationName('PlantApp');
        $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
        $client->setAccessType('offline');
        $client->setAuthConfig(__DIR__ . '/servicekey.json');
        $service = new Google_Service_Sheets($client);
        $spreadsheetId = "1v6i3MFlBfTom7p_WZHs-hK850D2pTg2kk4XJbrLlkd8";
    
        $range = 'Planting Log';
        $response = $service->spreadsheets_values->get($spreadsheetId, $range);
        $values = $response->getValues();
        return 4; //meaningless return value
    }

}

?>
