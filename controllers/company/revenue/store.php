<?php




//  dd($currentDate);

//  dd(count($_POST['branch_name']));

use Core\Database;

$db = new Database();
$user_no = $_SESSION['user']['user_no'];


// dd($user_no);



for ($i = 0; $i < count($_POST['branch_name']); $i++) {
    $user_no = $_SESSION['user']['user_no'];
    $branch_name = $_POST['branch_name'][$i];
    $branch_location = $_POST['location'][$i];
    $product_id = $_POST['product_id'][$i];
    $daily_revenue = $_POST['daily_revenue'][$i];
    $date =  date("Y-m-d");;

    error_log($product_id);


    // dd($_POST['name_of_investor'][$i]);

    $db->query("INSERT INTO revenue (user_no, branch_name, branch_location, product_id, daily_revenue, date) VALUES (:user_no, :branch_name, :branch_location, :product_id, :daily_revenue, :date)", [
        'user_no' => $user_no,
        'branch_name' => $branch_name,
        'branch_location' => $branch_location,
        'product_id' => $product_id,
        'daily_revenue' => $daily_revenue,
        'date' => $date
    ]);
}

$alert = 'Revenue Saved';


header("location: /company/daily-revenue?alert=" . urlencode($alert));

