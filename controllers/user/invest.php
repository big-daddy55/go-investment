<?php

use Core\Database;

// dd($_POST);

$shares = $_POST['shares_owned'];
$amount = $_POST['amount'];
$product_id = $_POST['product_id'];
$user_no = $_SESSION['user']['user_no']; 


$db = new Database();

$wallet = $db->query("SELECT * FROM wallet WHERE user_no = :user_no",[
    'user_no' => $user_no,
])->find();

$product_invested = $db->query("SELECT * FROM product WHERE product_id = :product_id",[
    'product_id' => $product_id
])->find();


$company_wallet = $db->query("SELECT * FROM wallet WHERE user_no = :company_user_no",[
    'company_user_no' => $product_invested['user_no']
])->find();




if($wallet['balance']>= $amount){

    $new_balance = $wallet['balance'] - $amount;
    $company_new_balance = $company_wallet['balance'] + $amount;

    error_log($new_balance);
    error_log($company_new_balance);

$db->query('INSERT INTO invested_companies (product_id, shares_owned, amount_invested, user_no) VALUES(:product_id, :shares_owned, :amount_invested, :user_no)',[
    'product_id' => $product_id,
    'shares_owned' => $shares,
    'amount_invested' => $amount,
    'user_no' => $user_no
]);

$db->query("UPDATE wallet SET balance = :new_balance WHERE user_no = :user_no",[
    'new_balance' => $new_balance,
    'user_no' => $user_no
]);


$db->query("UPDATE wallet SET balance = :company_new_balance WHERE user_no = :company_no",[
    'company_new_balance' => $company_new_balance,
    'company_no' => $product_invested['user_no']
]);

    $currentDate = date("Y-m-d");

    $referenceNumber = substr(sha1(mt_rand()), 0, 20); // Generate a random 20-character string
    $referenceNumberFormatted = implode('-', str_split($referenceNumber, 4)); // Insert hyphens every 4 characters

    $db->query('INSERT INTO transactions (user_no, amount, currency, status, payment_method,reference_number, transaction_type, date) VALUES(:user_no, :amount, :currency, :status, :payment_method, :reference_number, :transaction_type, :date)', [
        'user_no' => $user_no,
        'amount' => $amount,
        'currency' => "GHS",
        'status' => "success",
        'payment_method' => 'platform',
        'reference_number' => $referenceNumberFormatted,
        'transaction_type' => "invest",
        'date' => $currentDate
    ]);

    if (isset($_SERVER['HTTP_REFERER'])) {
        $previousPage = $_SERVER['HTTP_REFERER'];
        header("Location: $previousPage");
        die();
    } else {
        // If HTTP_REFERER is not set, redirect to a default page
        header("Location: index.php");
        die();
    }
// $db->query()


}



?>