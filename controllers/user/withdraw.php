<?php

use Core\Database;

//Check If user has enouogh balance
$amount = floatval($_POST['amount']);
$user_no = $_SESSION['user']['user_no'];
// $errors = [];

$amountPesewa = $amount / 100;
//Create an instance of the database
$db = new Database();

$user = $db->query("SELECT * FROM client WHERE user_no = :user_no", [
    'user_no' => $user_no
])->find();

$wallet = $db->query("SELECT * FROM wallet WHERE user_no = :user_no", [
    'user_no' => $user_no
])->find();

$user_balance = floatval($wallet['balance']);

if (!($user_balance >= $amount)) {
    //redirect to /user/wallat with error not enough balance

    $errors = 'Not enough balance';
    header('Location: /user/wallet?errors=' . urlencode($errors));
    die();
}

if ($user_balance >= $amount) {
    //Create tranfer recipients if first time

    error_log($user['recipient_code']);
    if ($user['recipient_code'] === 'None') {
        error_log('creating Recipient Code');
        $secretKey = 'sk_test_8fa444157e8a2a9db157f6d76529e3deae7f1030';  // Replace with your actual Paystack secret key
        $apiEndpoint = 'https://api.paystack.co/transferrecipient';

        $recipientData = array(
            'type' => 'mobile_money',
            'name' => $user['first_name'] . ' ' . $user['last_name'],
            'account_number' => $user['phone_number'],
            'bank_code' => 'MTN',  // Replace with the correct telco code for the mobile money provider
            'currency' => 'GHS'
        );

        $ch = curl_init($apiEndpoint);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer ' . $secretKey,
            'Content-Type: application/json',
        ));
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($recipientData));

        $response = curl_exec($ch);
        curl_close($ch);

        // Handle the response
        if ($response === false) {
            // Handle cURL error
            echo 'cURL error: ' . curl_error($ch);
        } else {
            $responseData = json_decode($response, true);
            error_log(print_r($responseData, true));
            // Check if the transfer recipient creation was successful
            if ($responseData['status'] === true) {
                // Save the recipient_code in your database for future use
                $recipient_code = $responseData['data']['recipient_code'];


                error_log('Transfer recipient created successfully. Recipient Code: ' . $recipient_code);

                $db->query('UPDATE client SET recipient_code= :recipient_code WHERE user_no = :user_no', [
                    'recipient_code' => $recipient_code,
                    'user_no' => $user_no
                ]);

               
            } else {
                // Handle the error
                error_log('Error creating transfer recipient: ' . $responseData['message']);
            }
        }
    }

    //initialize transfer

   error_log($user['recipient_code']);
    $secretKey = 'sk_test_8fa444157e8a2a9db157f6d76529e3deae7f1030';


    $url = "https://api.paystack.co/transfer";

    $fields = [
        "source" => "balance",
        "reason" => "withdrawal",
        "amount" => $amountPesewa,
        "recipient" => $user['recipient_code']
    ];

    $fields_string = http_build_query($fields);

    //open connection
    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer ' . $secretKey,
        "Cache-Control: no-cache",
    ));

    //So that curl_exec returns the contents of the cURL; rather than echoing it
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //execute post
    $result = curl_exec($ch);
    error_log($result);



                

}






