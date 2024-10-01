<?php
use Core\Database;

// $db->query('SELECT * FROM wallet WHERE user_id = ');
$db = new Database();
// dd($_SESSION['user']['user_id']);
// dd($db->completeProfile('client', 'user_id', $_SESSION['user']['user_id']));
$user_no = $_SESSION['user']['user_no'];


if (isset($_GET['company_no'])){
    $company_no = $_GET['company_no'];
}

$user = $db->query("SELECT * FROM client WHERE user_no = :user_no", [
    'user_no' => $user_no
])->find();

$wallet = $db->query("SELECT * FROM wallet WHERE user_no = :user_no", [
    'user_no' => $user_no
])->find();


$products = $db->query("SELECT * FROM product WHERE user_no = :user_no",[
    'user_no' => $company_no
])->findAll();

// $company_id = $product['user_no'];
$company = $db->query("SELECT * FROM company WHERE user_no = :user_no",[
    "user_no" => $company_no
])->find();


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

    view('user/product.view.php', [
        'user' => $user,
        'products' => $products,
        'wallet' => $wallet,
        'company' => $company
    ]);
    // view('partials/footer.php');
    die();
}
// dd("Not Complete");
header('location: /user/complete-profile');
die();
?>