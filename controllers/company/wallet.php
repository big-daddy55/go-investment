<?php

use Core\Database;

$db = new Database();

$user_no = $_SESSION['user']['user_no'];

// $user = $db->query("SELECT * FROM client WHERE user_id = :user_id", [
//     'user_id' => $user_id
// ])->find();

$wallet = $db->query("SELECT * FROM wallet WHERE user_no = :user_no", [
    'user_no' => $user_no
])->find();



if (!$db->completeProfile('company', 'user_no', $_SESSION['user']['user_no'])) {
    header('location: /company/listing');
    die();
}



view('partials/company/head.php', [
    'title' => 'Wallet'
]);

view("partials/company/side-nav.php");

view('company/wallet.view.php', [
    // 'user' => $user,
    'wallet' => $wallet,
]);
