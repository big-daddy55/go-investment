<?php

use Core\Database;

$db = new Database();

$user_no = $_SESSION['user']['user_no'];

$company = $db->query("SELECT * FROM company WHERE user_no = :user_no", [
    'user_no' => $user_no
])->find();

$business = $db->query("SELECT * FROM business WHERE user_no = :user_no", [
    'user_no' => $user_no
])->find();

// dd($company);


view('partials/company/head.php', [
    'title' => 'Update Profile'
]);
view("partials/company/side-nav.php", [
    'company' => $company
]);


if (isset($errors)) {
    view('company/report.view.php', [
        'errors' => $errors,
        'company' => $company,
        'business' => $business
    ]);
} else {
    view('company/report.view.php', [
        'company' => $company,
        'business' => $business
    ]);
}


// view('partials/footer.php');
