<?php

function redirectToHome():void
{
    header('Location:index3.php');
    exit();
}

ob_start();
if(false===isset($_POST['email'],$_POST['category'],$_POST['name'],$_POST['description']))
{
    redirectToHome();
}
$category = $_POST['category'];
$name = $_POST['name'];
$desc = $_POST['description'];
$email = $_POST['email'];

require __DIR__ . '/vendor/autoload.php';
$client = new \Google_Client();
$client->setApplicationName('Google Pets');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
try
{
    $client->setAuthConfig(__DIR__ . '/web-lab4-422209-76913d7c4a42.json');
}
catch (\Google\Exception $e)
{
    echo "Ошибка!\n";
}
$service = new Google_Service_Sheets($client);
$sheetID = "1sqD2bb63yP-HTXuHtXvBcv6_k_FcEtamjRtTdn731MY";

$range = "Pets";
$values = [[$category, $name, $email, $desc],];
$body = new Google_Service_Sheets_ValueRange(['values' => $values]);
$row = sizeof(($service->spreadsheets_values->get($sheetID, $range))->getValues()) + 1;
$params = ['valueInputOption'=>'RAW'];
try
{
    $service->spreadsheets_values->update($sheetID, 'Pets!A'.($row), $body, $params);
}
catch (\Google\Service\Exception $e)
{
    echo "Ошибка!!";
}
redirectToHome();