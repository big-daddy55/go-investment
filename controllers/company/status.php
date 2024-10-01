<?php

use Core\Database;

$db = new Database();

$user_no = $_SESSION['user']['user_no'];

$company = $db->query("SELECT * FROM company WHERE user_no = :user_no", [
    'user_no' => $user_no
])->find();

// $business = $db->query("SELECT * FROM business WHERE user_no = :user_no", [
//     'user_no' => $user_no
// ])->find();

if (!$db->completeProfile('company', 'user_no', $_SESSION['user']['user_no'])) {
    header('location: /company/listing');
    die();
}


// dd($company);


view('partials/company/head.php', [
    'title' => 'Account Status'
]);
view("partials/company/side-nav.php", [
    'company' => $company
]);


if (isset($errors)) {
    view('company/status.view.php', [
        'errors' => $errors,
        'company' => $company,
        // 'business' => $business
    ]);
} else {
    view('company/status.view.php', [
        'company' => $company,
    ]);
}


// view('partials/footer.php');
