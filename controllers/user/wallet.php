<?php

use Core\Database;

// $db->query('SELECT * FROM wallet WHERE user_no = ');
$db = new Database();
// dd($_SESSION['user']['user_no']);
// dd($db->completeProfile('client', 'user_no', $_SESSION['user']['user_no']));
$user_no = $_SESSION['user']['user_no'];

$user = $db->query("SELECT * FROM client WHERE user_no = :user_no", [
    'user_no' => $user_no
])->find();

$wallet = $db->query("SELECT * FROM wallet WHERE user_no = :user_no", [
    'user_no' => $user_no
])->find();

$transactions = $db->query("SELECT * FROM transactions WHERE user_no = :user_no", [
    'user_no' => $user_no
])->findAll();

$transactionsnumber = $db->query("SELECT * FROM transactions WHERE user_no = :user_no", [
    'user_no' => $user_no
])->fetchColumn();

$invested_companies = $db->query("SELECT * FROM invested_companies WHERE user_no = :user_no", [
    'user_no' => $user_no
])->findAll();

// dd($invested_companies);

// dd($transactionsnumber);


if (urldecode(isset($_GET['errors']))) {
    $errors = urldecode($_GET['errors']);
}

if ($db->completeProfile('client', 'user_no', $_SESSION['user']['user_no'])) {
    // dd("Complete");
    view(
        'partials/user/head.php',
        [
            'title' => 'Dashboard'
        ]
    );



    view("partials/user/side-navigation.php", [
        'user' => $user,
        'transactions' => $transactions,
        'transactionsnumber' => $transactionsnumber
    ]);

    if (isset($errors)) {
        view('user/wallet.view.php', [
            'user' => $user,
            'wallet' => $wallet,
            'transactions' => $transactions,
            'errors' => $errors
        ]);
    } else {
        view('user/wallet.view.php', [
            'user' => $user,
            'wallet' => $wallet,
            'transactions' => $transactions,
            'user' => $user,
            'invested_companies' => $invested_companies
        ]);
    }
    // view('partials/footer.php');
    die();
}
// dd("Not Complete");
header('location: /user/complete-profile');
die();
