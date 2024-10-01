<?php

$secretKey = 'sk_test_8fa444157e8a2a9db157f6d76529e3deae7f1030';



$amount = $_POST['amount'];
$email = $_SESSION['user']['email'];
$amountPesewa = intval($amount) * 100;


function generate_uuid()
{
    return sprintf(
        '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0x0fff) | 0x4000,
        mt_rand(0, 0x3fff) | 0x8000,
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff)
    );
}
$reference_id = generate_uuid();

// Initialize mobile money payment
$payload = [
    'amount' => $amountPesewa,
    'email' => $email,
    'reference' => $reference_id,
    'payment_type' => 'mobile_money',
    'currency' => 'GHS',
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.paystack.co/transaction/initialize');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . $secretKey,
    'Content-Type: application/json',
]);

$response = curl_exec($ch);
curl_close($ch);

// Check for errors
if ($response === false) {
    die('Error initializing payment: ' . curl_error($ch));
}

// Parse the response
$paymentData = json_decode($response, true);

error_log(print_r($paymentData, true));
// error_log($paymentData);

// Check if initialization was successful
if ($paymentData['status'] === true) {
    // Get the mobile money authorization URL from the response
    $authorizationUrl = $paymentData['data']['authorization_url'];

    // Redirect the user to the authorization URL
    header('Location: /checkout?url=' . urlencode($authorizationUrl));
    die();
} else {
    // Handle initialization error
    die('Error initializing payment: ' . $paymentData['message']);
}
?>