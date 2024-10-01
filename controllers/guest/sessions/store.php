<?php

use Core\Validator;

use Core\Database;



$email = $_POST['email'];
$password = $_POST['password'];


// dd($password);
$errors = [];

// Check if the email address is in the correct format
if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address';
}
terminateWithError($errors, 'controllers/guest/sessions/create.php');
// $db = App::resolve(Database::class);
$db = new Database();

// If the email address is in the correct format, check if it's exist in the database
if (empty($errors)) {
    $user = $db->query('SELECT * FROM users WHERE email = :email', [
        'email' => $_POST['email']
        ]) -> find();

    if ($user) {

        // dd($user);
        // The user exists - verify the password
        if (password_verify($_POST['password'], $user['password'])) {
            
            // dd('Loggedin');
            login($user);

            

            checkuser($user['user_type']);
            // dd('Checked User In');
            die();
        }
    }
    $errors['auth'] = 'Email and Password does not match';
}

terminateWithError($errors, 'controllers/guest/sessions/create.php');
// if (!($password === $user['password'])) {
//     $errors['password'] = 'Email and Password does not match';
// }

// terminateWithError($errors, 'controllers/sessions/create.php');


// Check if the account matches the user's password in the database

?>








// else{
//     login([
//         'id' => '$id',
//         'email' => $email
//     ]);
// }

// echo "Submitted the form";
// die();
