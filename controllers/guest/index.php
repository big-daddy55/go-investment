<?php
use Core\Database;

$db = new Database();


$products = $db->query("SELECT * FROM product")->findAll();



view('partials/head.php', [
    'title' => 'GO'
]);
view("partials/guest-nav.php");

view('guest/index.view.php', [
    'products' => $products
]);
view('partials/footer.php');
