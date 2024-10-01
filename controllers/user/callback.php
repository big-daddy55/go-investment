<?php
// path-to-your-callback-script.php

// Retrieve the raw POST data sent by MTN
$raw_post_data = file_get_contents("php://input");

// Log the raw data for debugging purposes
file_put_contents("callback_log.txt", $raw_post_data . PHP_EOL, FILE_APPEND);

// Decode the JSON data received from MTN
$json_data = json_decode($raw_post_data, true);

// Check if decoding was successful
if ($json_data !== null) {
    // Extract relevant information from the JSON data
    $transactionId = $json_data['transactionId']; // Adjust based on the actual field names
    $status = $json_data['status']; // Adjust based on the actual field names
    $amount = $json_data['amount']; // Adjust based on the actual field names

    // Perform your logic based on the callback data
    if ($status === 'SUCCESS') {
        dd("Success");
    } else {
        dd("failed");
    }

    // Respond to MTN with a 200 OK status
    http_response_code(200);
} else {
    // Failed to decode JSON data
    // Log or handle the error as needed
    http_response_code(400); // Bad Request
}
