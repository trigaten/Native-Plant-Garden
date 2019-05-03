<?php
require_once 'google-api-php-client-2.2.2/vendor/autoload.php'; // getting necessary files
    $client = new \Google_Client(); // setting up client
    $client->setApplicationName('PlantApp');
    $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
    $client->setAccessType('offline');
    $client->setAuthConfig(__DIR__ . '/servicekey.json');
    $service = new Google_Service_Sheets($client);
    $spreadsheetId = "1v6i3MFlBfTom7p_WZHs-hK850D2pTg2kk4XJbrLlkd8";

    
    function getPlantingLog(){

    $range = 'Planting Log';
    $response = $service->spreadsheets_values->get($spreadsheetId, $range);
    $values = $response->getValues();
    
    return $values;
    }

    function getPlantCharacteristics(){

    $range = 'Plant characteristics and notes';
    $response = $service->spreadsheets_values->get($spreadsheetId, $range);
    $values = $response->getValues();
    
    return $values;
    }
?>
