<?php

use Core\Database;

$db = new Database();

$user_no = $_SESSION['user']['user_no'];


$company_name = $_POST['company_name'];
$industry = $_POST['industry'];
$business_number = $_POST['business_number'];
$phone_number = $_POST['phone_number'];
$business_type = $_POST['business_type'];
$business_website = $_POST['business_website'];
$company_revenue = $_POST['company_revenue'];
$income_per_day = $_POST['income_per_day'];
$losses_per_day = $_POST['losses_per_day'];
// $financial_statement = $_POST['financial_statement'];
$founder_name = $_POST['founder_name'];
$number_of_executive = $_POST['number_of_executive'];
$number_of_board = $_POST['number_of_board'];
$number_of_branches = $_POST['number_of_branches'];
$product_and_services = $_POST['product_and_services'];
$risk_factors = $_POST['risk_factors'];
$company_policy = $_POST['company_policy'];


$targetDir = "public/resource/documents/";


$targetFile = $targetDir . basename($user_no . $_FILES["financial_statement"]["name"]);

// dd($_FILES["financial_statement"]["name"]);

// dd($targetFile);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// dd($imageFileType);

if (move_uploaded_file($_FILES["financial_statement"]["tmp_name"], $targetFile)) {
    // Update the database with the file path
    $userno = $_SESSION['user']['user_no']; // Replace with the actual user ID
    $db = new Database();
    $financial_statement_path = $db->quote($targetFile);
    // dd($profilePhotoPath);
    // $db->query("UPDATE company SET financial_statement = :financial_statement_path WHERE user_no = :user_no", [
    //     'financial_statement_path' => $financial_statement_path,
    //     'user_no' => $user_no
    // ]);

    // // dd('Success');

$db->query("UPDATE company SET company_name = :company_name, industry = :industry, business_number = :business_number, phone_number = :phone_number, business_type = :business_type, business_website = :business_website, company_revenue = :company_revenue, income_per_day = :income_per_day, losses_per_day = :losses_per_day, financial_statement = :financial_statement, founder_name = :founder_name, number_of_executive = :number_of_executive, number_of_board = :number_of_board, number_of_branches = :number_of_branches, product_and_services = :product_and_services, risk_factors = :risk_factors, company_policy = :company_policy WHERE user_no = :user_no", [
    'company_name' => $company_name,
    'industry' => $industry,
    'business_number' => $business_number,
    'phone_number' => $phone_number,
    'business_type' => $business_type,
    'business_website' => $business_website,
    'company_revenue' => $company_revenue,
    'income_per_day' => $income_per_day,
    'losses_per_day' => $losses_per_day,
    'financial_statement' => $financial_statement_path,
    'founder_name' => $founder_name,
    'number_of_executive' => $number_of_executive,
    'number_of_board' => $number_of_board,
    'number_of_branches' => $number_of_branches,
    'product_and_services' => $product_and_services,
    'risk_factors' => $risk_factors,
    'company_policy' => $company_policy,
    'user_no' => $user_no
]);

// error_log($db->query());

}





// dd(count($_POST['name_of_investor']));

for ($i = 0; $i < count($_POST['name_of_investor']); $i++) {

    $name_of_investor = $_POST['name_of_investor'][$i];
    $percentage_owned = $_POST['percentage_owned'][$i];
    $interest_structure = $_POST['interest_structure'][$i];


    // dd($_POST['name_of_investor'][$i]);

    $db->query("INSERT INTO investors (user_no,investor_name, percentage_owned, interest_structure) VALUES (:user_no, :investor_name, :percentage_owned, :interest_structure)", [
        'user_no' => $user_no,
        'investor_name' => $name_of_investor,
        'percentage_owned' => $percentage_owned,
        'interest_structure' => $interest_structure
    ]);
}



header('location: /company/complete');
