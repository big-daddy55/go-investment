<?php

use Core\Database;

$db = new Database();

$user_id = $_SESSION['user']['user_id'];

$user = $db->query("SELECT * FROM client WHERE user_id = :user_id", [
    'user_id' => $user_id
])->find();

// dd($users);


view('partials/user/head.php', [
    'title' => 'Update Password'
]);
view("partials/user/nav.php");


if (isset($errors)) {
    view('user/password.view.php', [
        'errors' => $errors,
        'user' => $user
    ]);
} else {
    view('user/password.view.php', [
        'user' => $user
    ]);
}


// view('partials/footer.php');
