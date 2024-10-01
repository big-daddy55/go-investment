<?php

use Core\Database;

$db = new Database();

$user_no = $_SESSION['user']['user_no'];


$products = $db->query("SELECT * FROM product WHERE user_no = :user_no", [
    'user_no' => $user_no
])->findAll();

$company = $db->query("SELECT * FROM company WHERE user_no = :user_no", [
    'user_no' => $user_no
])->find();




view('partials/company/head.php', [
    'title' => 'Promotion'
]);


view("partials/company/side-nav.php");
// view("partials/user/side-navigation.php");

view('company/promotion.view.php', [
    'user_no' => $user_no,
    'products' => $products,
    'company' => $company,
]);
