<?php 
view(
    'partials/user/head.php',
    [
        'title' => 'Home'
    ]
);


// view("partials/user/side-navigation.php");

view('company/index.view.php', [
    'user' => $user,
    'wallet' => $wallet
]);