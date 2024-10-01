<?php

    // Your MTN Mobile Money API credentials
    $api_key = '6dc8c9dd99fb4af5b31b0d0534a3eafd';
    $api_secret = '676cc284b8bb4e03b0b8c32750023ded';
    $callback_url = 'wallet/callback'; // replace with your actual callback URL

    // MTN Mobile Money API endpoint for Request-to-Pay
    $api_endpoint = 'https://sandbox.momodeveloper.mtn.com/collection/v1_0/requesttopay';

    // User input from the form
    $phone_number = $_POST['phone_number'];
    $amount = $_POST['amount'];

    // Prepare headers
    $headers = [
        'Authorization: Basic ' . base64_encode("$api_key:$api_secret"),
        'Content-Type: application/json',
    ];

    // Prepare request data
    $request_data = [
        'amount' => $amount,
        'currency' => 'GHS',
        'externalId' => uniqid(), // Replace with your unique identifier for the transaction
        'payer' => [
            'partyIdType' => 'MSISDN',
            'partyId' => $phone_number,
        ],
        'payerMessage' => 'Payment for your order',
        'payeeNote' => 'Thank you for your payment',
    ];

    // Make API request
    $ch = curl_init($api_endpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($request_data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    dd($http_code);

    curl_close($ch);

    // Process API response
    if ($http_code == 202) {
        // Payment request accepted
        $decoded_response = json_decode($response, true);
        // Redirect user to the payment approval URL
        header("Location: " . $decoded_response['data']['_links']['approval_url']['href']);
        exit();
    } else {
        // Handle error
        echo 'Error initiating payment. Please try again.';
    }

