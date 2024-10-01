<?php

use Core\Database;


if(isset($_SESSION['user']['user_no'])){

    $user_no = $_SESSION['user']['user_no'];
    $db = new Database();
    $user = $db->query("SELECT * FROM client WHERE user_no = :user_no", [
        'user_no' => $user_no
    ])->find();

    $wallet = $db->query("SELECT * FROM wallet WHERE user_no = :user_no", [
            'user_no' => $user_no
        ])->find();

    view(
        'partials/user/head.php',
        [
            'title' => 'Home'
        ]
    );

    view("partials/user/nav.php", [
        'wallet' => $wallet,
        'user' => $user
    ]);

    view('guest/news-insight.view.php');
    die();
}

view('partials/head.php', [
    'title' => 'News & Insight'
]);
view("partials/guest-nav.php");
view('guest/news-insight.view.php');
view('partials/footer.php');

?>
