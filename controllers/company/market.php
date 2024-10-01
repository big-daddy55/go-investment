<?php

use Core\Database;

// $db->query('SELECT * FROM wallet WHERE user_id = ');
$db = new Database();
// dd($_SESSION['user']['user_id']);
// dd($db->completeProfile('client', 'user_id', $_SESSION['user']['user_id']));

if (isset($_SESSION['user']['user_no'])) {
    $user_no = $_SESSION['user']['user_no'];
}

$user = $db->query("SELECT * FROM client WHERE user_no = :user_no", [
    'user_no' => isset($user_no) ? $user_no : null,
])->find();

$wallet = $db->query("SELECT * FROM wallet WHERE user_no = :user_no", [
    'user_no' => isset($user_no) ? $user_no : null,
])->find();

// $invested_companies = $db->query("SELECT * FROM invested_companies WHERE user_no = :user_no", [
//     'user_no' => $user_no
// ])->findAll();


$products = $db->query("SELECT * FROM product")->findAll();

// $company_id = $product['user_no'];
$company = $db->query("SELECT * FROM company")->findAll();




view('partials/company/head.php', [
    'title' => 'Market-Activity'
]);

view("partials/company/side-nav.php");


    // view("partials/user/side-navigation.php", [
    //     'user' => $user
    // ]);

    view('company/market.view.php', [
        'products' => $products,
        'company' => $company,
    ]);
    // view('partials/footer.php');
    die();


