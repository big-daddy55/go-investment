<?php

use Core\Database;

$db = new Database;
$user = $db->query('SELECT * FROM client WHERE user_no = :user_no', [
    'user_no' => $_SESSION['user']['user_no']
])->find();








view('partials/head.php', [
    'title' => 'Complete Your Profile'
]);

if (isset($errors)) {
    view('user/profile/create.view.php', [
        'errors' => ($errors)
    ]);
} else {
    view('user/profile/create.view.php', [
        'user' => $user,

    ]);
}


// view('partials/footer.php');
