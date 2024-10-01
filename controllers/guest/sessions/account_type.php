<?php

$account_type = $_POST['account_type'];

// dd($account_type);

// header('location: /register-.{$account_type}.');
// die();

if($account_type === 'individual'){
    header('location: /register-individual');
    die();
}

if($account_type === 'business'){
    header('location: /register-business');

    die();
}