<?php

// API endpoint
$apiEndpoint = 'https://dev.kwayisi.org/apis/gse/live';

// Make the GET request to the API
$response = file_get_contents($apiEndpoint);

// Check if the request was successful
if ($response === false) {
    die('Error fetching data from the API.');
}

// Decode the JSON response
$data = json_decode($response, true);

foreach ($data as $sdata) : ?>
    <p><?= $sdata['name'] ?> - <?= $sdata['price'] ?> - <?= $sdata['change'] ?></p>
<?php endforeach;

$dataString = json_encode($response, true);

error_log($dataString);

dd($data);

// Check if JSON decoding was successful
if ($data === null) {
    die('Error decoding JSON.');
}

// Output the retrieved data
echo '<pre>';
print_r($data);
echo '</pre>';



?>