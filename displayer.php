<?php
include "printImage.php";
echo $_GET['Name']."<br><br>";
require_once 'google-api-php-client-2.2.2/vendor/autoload.php';
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
    if (empty($values)) {
        print 'No data found.\n';
    } else {

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
    
?>
