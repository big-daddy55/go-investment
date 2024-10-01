<?php

use Core\Validator;
use Core\Database;



$db = new Database();
// $db = $container->resolve('Database');

// dd($db);
$company_name = $_POST['company_name'];
$email = $_POST['email'];
$password = $_POST['password'];
// $user_type = $_POST['user_type'];

$errors = [];

// Check if the email address is in the correct format
if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address';
}
terminateWithError($errors, 'views/guest/sessions/create.view.php');

// Check if the email address is already in use
if ($db->exists('company', 'email', $email)) {
    $errors['email'] = 'Email address already in use';
}
terminateWithError($errors, 'views/guest/sessions/create.view.php');

// Check if the password is at least 8 characters long


$lastUserId = $db->query("SELECT company_id FROM company ORDER BY company_id DESC LIMIT 1")->fetchColumn();

$newNumericPart = $lastUserId + 1;

$user_number = "BUS" . sprintf('%03d', $newNumericPart);

// dd($user_number);
// Insert Data into database
$db->query("INSERT INTO users (user_no, email, password, user_type) VALUES (:user_no, :email, :password, :user_type)", [
    'user_no' => $user_number,
    'email' => $email,
    'password' => password_hash($password, PASSWORD_DEFAULT),
    'user_type' => 'business'
]);

$db->query("INSERT INTO company (user_no, company_name, email) VALUES (:user_no, :company_name,:email)", [
    'user_no' => $user_number,
    'company_name' => $company_name,
    'email' => $email
]);


$lastWalletId = $db->query("SELECT wallet_id FROM wallet ORDER BY wallet_id DESC LIMIT 1")->fetchColumn();




// Step 3: Increment the numeric part
$newNumericPart = $lastWalletId + 1;



// Step 4: Format the new wallet ID
$walletNumber = "WAL" . sprintf('%03d', $newNumericPart);


$db->query("INSERT INTO wallet (user_no, wallet_name, wallet_number) VALUES(:user_no, :wallet_name, :wallet_number)", [
    'user_no' => $user_number,
    'wallet_name' => $company_name,
    'wallet_number' => $walletNumber
]);



// $db->query("INSERT INTO company_manager (first_name, last_name, email) VALUES (:first_name, :last_name, :email)", [
//     'first_name' => $first_name,
//     'last_name' => $last_name,
//     'email' => $email,
// ]);






$alert = 'Account Registered, Sign In Now';

header("Location: /login?alert=" . urlencode($alert));


require base_path('controllers/guest/account/create.php', [
    'alert' => 'Account Registered, Sign In Now'
]);

