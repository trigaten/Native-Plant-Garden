<?php
echo "Test1";
require_once 'google-api-php-client-2.2.2/vendor/autoload.php';
    echo "Test2";
    $client = new \Google_Client();
    $client->setApplicationName('PlantApp');
    $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
    $client->setAccessType('online');
    $client->setAuthConfig(__DIR__ . '/servicekey.json');
    $service = new Google_Service_Sheets($client);
    $spreadsheetId = "1v6i3MFlBfTom7p_WZHs-hK850D2pTg2kk4XJbrLlkd8";

    echo "Test3";
    $range = 'Plant characteristics and notes!A1:A5';
    $response = $service->spreadsheets_values->get($spreadsheetId, $range);
    $values = $response->getValues();
    if (empty($values)) {
        print 'No data found.\n';
    } else {
        foreach ($values as $row) {
            for ($i = 0; $i < sizeof($row); $i++) {
                echo $row[$i].'\n';
            }
        }
    }
?>
