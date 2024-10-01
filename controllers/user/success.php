<?php

use Core\Database;

// $db->query('SELECT * FROM wallet WHERE user_id = ');
$db = new Database();
// dd($_SESSION['user']['user_id']);
// dd($db->completeProfile('client', 'user_id', $_SESSION['user']['user_id']));
$user_no = $_SESSION['user']['user_no'];

$user = $db->query("SELECT * FROM client WHERE user_no = :user_no", [
    'user_no' => $user_no
])->find();

$wallet = $db->query("SELECT * FROM wallet WHERE user_no = :user_no", [
    'user_no' => $user_no
])->find();

$products = $db->query("SELECT * FROM product")->findAll();


if ($db->completeProfile('client', 'user_no', $_SESSION['user']['user_no'])) {
    // dd("Complete");
    view(
        'partials/user/head.php',
        [
            'title' => 'Home'
        ]
    );

    view("partials/user/nav.php", [
        'user' => $user
    ]);

    // view("partials/user/side-navigation.php", [
    //     'user' => $user
    // ]);

    view('user/index.view.php', [
        'wallet' => $wallet,
        'user' => $user,
        'products' => $products
    ]);
    // view('partials/footer.php');
    die();
}
// dd("Not Complete");
header('location: /user/complete-profile');
die();
