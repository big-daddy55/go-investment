<?php

use Core\Database;

$db = new Database();
$products = $db->query("SELECT * FROM product WHERE user_no = :user_no",[
    'user_no' => $_SESSION['user']['user_no']
])->findAll();

if (!$db->completeProfile('company', 'user_no', $_SESSION['user']['user_no'])) {
    header('location: /company/listing');
    die();
}

view('partials/company/head.php', [
    'title' => 'List Product'
]);
view("partials/company/side-nav.php");

// view("partials/guest-nav.php");
view('company/product/list.view.php',[
    "products" => $products
]);

