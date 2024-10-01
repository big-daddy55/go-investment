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


$invested_companies = $db->query("SELECT * FROM invested_companies WHERE user_no = :user_no",[
    'user_no' => $user_no
])->findAll();


// $company_id = $product['user_no'];
$all_products = $db->query("SELECT * FROM product")->findAll();


if ($db->completeProfile('client', 'user_no', $_SESSION['user']['user_no'])) {
    // dd("Complete");
    view('partials/user/head.php',
        [
            'title' => 'Home'
        ]
    );

    view("partials/user/nav.php", [
        'user' => $user,
        'wallet' => $wallet
    ]);

    // view("partials/user/side-navigation.php", [
    //     'user' => $user
    // ]);

    view('user/portfolio.view.php', [
        'user' => $user,
        'all_products' => $all_products,
        'invested_companies' => $invested_companies
    ]);
    // view('partials/footer.php');
    die();
}
// dd("Not Complete");
header('location: /user/complete-profile');
die();
?>