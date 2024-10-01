<?php

use Core\Database;


$user_no = $_SESSION['user']['user_no'];
$db = new Database();
$company = $db->query("SELECT * FROM company WHERE user_no = :user_no",[
    'user_no' => $user_no
])->fetchColumn();

if (!$db->completeProfile('company', 'user_no', $_SESSION['user']['user_no'])) {
    header('location: /company/listing');
    die();
}



view('partials/company/head.php', [
    'title' => 'Homepage'
]);

view("partials/company/side-nav.php");

$company = $db->query("SELECT * FROM company WHERE user_no = :user_no", [
    'user_no' => $user_no
])->find();

$products = $db->query("SELECT * FROM product WHERE user_no = :user_no", [
    'user_no' => $user_no
])->findAll();

$invested_companies = $db->query("SELECT * FROM invested_companies WHERE company_no = :company_no",[
    'company_no' => $user_no
])->findAll();
// function getNumberOfProduct(){
//     $user_no = $_SESSION['user']['user_no'];
//     $db = new Database();
//     $product = $db->query("SELECT * FROM product WHERE user_no = :user_no", [
//         'user_no' => $user_no
//     ])->findAll();
// }

$transactions = $db->query("SELECT * FROM transactions WHERE user_no = :user_no", [
    'user_no' => $user_no
])->findAll();

view('company/dashboard.view.php',[
    'company' => $company,
    'transactions' => $transactions,
    'products' => $products,
    'invested_companies' => $invested_companies
]);
