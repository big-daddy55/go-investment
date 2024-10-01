<?php
use Core\Database;

$db = new Database();

$user_id = $_SESSION['user']['user_id'];

$user = $db->query("SELECT * FROM client WHERE user_id = :user_id", [
    'user_id' => $user_id
])->find();

// dd($users);


view('partials/user/head.php', [
    'title' => 'Update Profile'
]);
view("partials/user/side-navigation.php", [
    'user' => $user
]);


if (isset($errors)) {
    view('user/settings.view.php', [
        'errors' => $errors,
        'user' => $user
    ]);
}
else{
     view('user/settings.view.php', [
        'user' => $user
     ]);
}


// view('partials/footer.php');
