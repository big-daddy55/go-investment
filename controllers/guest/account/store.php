<?php

use Core\Validator;

use Core\Database;

// require base_path("bootstrap.php");
// $container = new Container;


$db = new Database();
// $db = $container->resolve('Database');

// dd($db);
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
// $user_type = $_POST['user_type'];

$errors = [];

// Check if the email address is in the correct format
if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address';
    terminateWithError($errors, 'controllers/guest/account/create.php');
    die();
}




// Check if the email address is already in use
if ($db->exists('client', 'email', $email)) {
    $errors['email'] = 'Email address already in use';

    header("Location: /register-individual?errors=" . urlencode($errors['email']));
    // terminateWithError($errors, 'controllers/guest/account/create.php');
    die();
}

// dd($errors);
// terminateWithError($errors, 'controllers/guest/account/create.php');
// terminateWithError($errors, 'views/guest/sessions/create.view.php');


// Check if the password is at least 8 characters long


$lastUserId = $db->query("SELECT user_id FROM client ORDER BY user_id DESC LIMIT 1")->fetchColumn();

$newNumericPart = $lastUserId + 1;

$user_number = "IND" . sprintf('%03d', $newNumericPart);


// Insert Data into database
$db->query("INSERT INTO users (user_no, email, password, user_type) VALUES (:user_no, :email, :password, :user_type)", [
    'user_no' => $user_number,
    'email' => $email,
    'password' => password_hash($password, PASSWORD_DEFAULT),
    'user_type' => 'individual'
]);

    $db->query("INSERT INTO client (user_no, first_name, last_name, email) VALUES (:user_no, :first_name, :last_name, :email)", [
        'user_no' => $user_number,
        'first_name' => $first_name,
        'last_name' => $last_name,
        'email' => $email
    ]);


    // $db->query("INSERT INTO company_manager (first_name, last_name, email) VALUES (:first_name, :last_name, :email)", [
    //     'first_name' => $first_name,
    //     'last_name' => $last_name,
    //     'email' => $email,
    // ]);




// dd('registered');

$alert = 'Account Registered, Sign In Now';

header("Location: /login?alert=" . urlencode($alert));
die();


// require base_path('controllers/guest/account/create.php', [
//     'alert' => 'Account Registered, Sign In Now'
// ]);

// die();

// $user_id = $db->connection->lastInsertId();

// login([
//     'user_id' => $user_id,
//     'user_type' => 'user',
//     'first_name' => $first_name,
//     'last_name' => $last_name,
//     'email' => $email,
// ]);

// if($db->completeProfile('client', 'user_id', $_SESSION['user_id'])){
//     dd("Not Complete");
// header('location: /user/dashboard');
// } else{
//     dd("Not Complete");
//     header('location: /user/complete_profile');
// }