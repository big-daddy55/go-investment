<?php

use Core\Database;

$db = new Database();
// $user = $_SESSION['user'];
$user_no = $_SESSION['user']['user_no'];

$user = $db->query("SELECT * FROM client WHERE user_no = :user_no", [
    'user_no' => $user_no
])->find();

$wallet = $db->query("SELECT * FROM wallet WHERE user_no = :user_no", [
    'user_no' => $user_no
])->find();

// dd($users);

$authorization_url = urldecode($_GET['url']);




$user_type = $_SESSION['user']['user_type'];



if($user_type === 'individual'){
view('partials/user/head.php', [
    'title' => 'Update Profile'
]);

view("partials/user/nav.php", [
    'user' => $user,
    'wallet' => $wallet
]);
} elseif($user_type === 'business'){
    view('partials/company/head.php', [
        'title' => 'Update Profile'
    ]);

    view("partials/company/side-nav.php", [
        'user' => $user,
        'wallet' => $wallet
    ]);
}

view("user/checkout.view.php",[
    'authorization_url' => $authorization_url
]);

// require_once('api/paystack-php/src/autoload.php');

// use Yabacon\Paystack;
// $paystack = new Paystack('sk_test_8fa444157e8a2a9db157f6d76529e3deae7f1030');

// // Step 3: Handle Paystack Callback
// $input = file_get_contents("php://input");
// $event = json_decode($input);

// // Verify the payment
// $paymentDetails = $paystack->transaction->verify([
//     'reference' => $event->data->reference,
// ]);

// // Check payment status
// if ($paymentDetails->data->status === 'success') {
//     // Payment was successful

//     var_dump('success');
//     // Perform necessary actions (e.g., update your database, fulfill the order, etc.)

//     // Redirect the user to a success page
//     header('Location: /success-page');
// } else {
//     // Payment failed
//     // Handle the failure (e.g., show an error message)
//     echo 'Payment failed';
// }

?>