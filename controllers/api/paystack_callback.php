<?php
require base_path('/api/paystack-php/src/autoload.php');

use Core\Database;
use Yabacon\Paystack;
use Yabacon\Paystack\Routes\Balance;

$paystack = new Paystack('sk_test_8fa444157e8a2a9db157f6d76529e3deae7f1030');

$user_no = $_SESSION['user']['user_no'];
$db = new Database();

$wallet = $db->query("SELECT * FROM wallet WHERE user_no = :user_no", [
    'user_no' => $user_no
])->find();

$wallet_balance = $wallet['balance'];

error_log($wallet_balance);

// dd($wallet_balance);



// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve JSON data from the request body
    $jsonData = file_get_contents('php://input');

    // Decode the JSON data
    $paystackData = json_decode($jsonData);

    

    // Log the received data to the error log for debugging
    error_log('Received Paystack callback data: ' . print_r($paystackData, true));
    // error_log('Amount is: ' . print_r($paystackData->data->amount, true));

    // Process the payment data as needed
    if ($paystackData->status === 'success') {
        // Payment was successful

        // Verify the transaction using the Paystack API
        $verificationUrl = 'https://api.paystack.co/transaction/verify/' . $paystackData->reference;
            error_log($verificationUrl);
        $verificationResponse = verifyPaystackTransaction($verificationUrl);
        error_log('Paystack Verification Response: ' . print_r($verificationResponse, true));

        // Check if verification was successful
        if ($verificationResponse && $verificationResponse->status === true) {
            // Perform necessary actions (e.g., update your database, fulfill the order, etc.)
            error_log('Payment verification successful');
            $submittedamount = intval($verificationResponse->data->amount);

            $amount = $submittedamount / 100;

            $newbalance = intval($amount) + intval($wallet['balance']);
            error_log($newbalance);

            $rawDate = $verificationResponse->data->paid_at;
            $dateTime = new DateTime($rawDate);
            $date = $dateTime->format('Y-m-d');

            $db->query('UPDATE wallet SET balance = :balance WHERE user_no = :user_no',[
                'balance' => $newbalance,
                'user_no' => $user_no
            ]);
            $db->query("INSERT INTO transactions (user_no, amount, currency, payment_method, status, reference_number, transaction_type, date) VALUES(:user_no, :amount, :currency, :payment_method, :status, :reference_number, :transaction_type, :date)",[
                'user_no' => $user_no,
                'amount' => $amount,
                'currency' => $verificationResponse->data->currency,
                'payment_method' => $verificationResponse->data->channel,
                'status' => $verificationResponse->data->status,
                'reference_number' => 'bba6fc16-0ece-4edd-a5cc-e700ab125449',
                'transaction_type' => 'deposit',
                'date' => $date
            ]);

            echo '<script>window.location.href = "/user/wallet";</script>';
            exit();
            // header('location: /user/wallet');
            die();
        } else {
            // Payment verification failed
            // Handle the failure (e.g., show an error message)
            error_log('Payment verification failed');
        }
        error_log('Payment successful');
    } else {
        // Payment failed or other event
        // Handle the failure (e.g., show an error message)
        error_log('Payment failed');
    }

    // Send a JSON response
    header('Content-Type: application/json');

    // Log the response before sending it
    error_log('Server response: ' . json_encode(['status' => 'success']));

    echo json_encode(['status' => 'success']);
} else {
    // Invalid request method
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method Not Allowed']);
}

// Function to verify Paystack transaction
function verifyPaystackTransaction($url)
{
    $secretKey = 'sk_test_8fa444157e8a2a9db157f6d76529e3deae7f1030'; // Replace with your actual Paystack secret key

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . $secretKey,
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    return json_decode($response);
}

?>