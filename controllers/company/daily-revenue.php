<?php

use Core\Database;

$db = new Database();

$user_no = $_SESSION['user']['user_no'];
if(isset($_GET['alert'])){
    $alert = $_GET['alert'];
}

$products = $db->query("SELECT * FROM product WHERE user_no = :user_no", [
    'user_no' => $user_no
])->findAll();

$company = $db->query("SELECT * FROM company WHERE user_no = :user_no", [
    'user_no' => $user_no
])->find();


if (isset($product_id)) {
    $branches = $db->query("SELECT * FROM branches WHERE product_id = :product_id", [
        'product_id' => $product_id
    ])->findAll();
}

view('partials/company/head.php', [
    'title' => 'Daily Revenue'
]);


view("partials/company/side-nav.php");
// view("partials/user/side-navigation.php");

view('company/daily-revenue.view.php', [
    'user_no' => $user_no,
    'products' => $products,
    'alert' => isset($alert) ? $alert : null,
    'company' => $company,
    'branches' => isset($branches) ? $branches : null
]);
