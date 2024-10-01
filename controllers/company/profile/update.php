<?php



use Core\Database;
use Core\Validator;

$user_no = $_SESSION['user']['user_no'];


// $company_name = $_POST['company_name'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$business_type = $_POST['business_type'];
$business_website = $_POST['business_website'];
$industry =$_POST['industry'];
$bio = $_POST['bio'];
$number_of_employees = $_POST['number_of_employees'];
$number_of_branches = $_POST['number_of_branches'];
$number_of_executive = $_POST['number_of_executive'];
$number_of_board = $_POST['number_of_board'];
$product_and_services = $_POST['product_and_services'];
$company_revenue = $_POST['company_revenue'];
$income_per_day = $_POST['income_per_day'];
$losses_per_day = $_POST['losses_per_day'];
$currentPassword = $_POST['current_password'];
$password = $_POST['password'];
$risk_factors = $_POST['risk_factors'];
$errors = [];

if (!Validator::string($phone_number, 10, 10)) {
$errors['phone_number'] = 'Phone Number must be 10 characters long';
}
// terminateWithError($errors, 'controllers/company/profile/create.php');

$db = new Database();


$user = $db->query("SELECT * FROM users WHERE user_no = :user_no", [
'user_no' => $user_no
])->find();

//checkk if current password matches the hashed password in the database
if (password_verify($currentPassword, $user['password'])) {
if (!Validator::email($email)) {
$errors['email'] = 'Please provide a valid email address';
}
// terminateWithError($errors, 'views/guest/sessions/create.view.php');


if (!Validator::string($password, 8, 100)) {
$errors['password'] = 'Password must be at least 8 characters long';
}
// terminateWithError($errors, 'views/user/settings.view.php');

$db->query("UPDATE company SET email = :email, address = :address, industry = :industry, business_type = :business_type, business_website = :business_website, risk_factors = :risk_factors, bio = :bio, number_of_employees = :number_of_employees, number_of_branches = :number_of_branches, number_of_executive = :number_of_executive, number_of_board = :number_of_board, product_and_services = :product_and_services, company_revenue = :company_revenue, income_per_day = :income_per_day, losses_per_day = :losses_per_day, phone_number = :phone_number WHERE user_no = :user_no", [
'email' => $email,
'address' => $address,
'industry' => $industry,
'business_type' => $business_type,
'business_website' => $business_website,
'risk_factors' => $risk_factors,
'bio' => $bio,
'number_of_employees' => $number_of_employees,
'number_of_branches' => $number_of_branches,
'number_of_executive' => $number_of_executive,
'number_of_board' => $number_of_board,
'product_and_services' => $product_and_services,
'company_revenue' => $company_revenue,
'income_per_day' => $income_per_day,
'losses_per_day' => $losses_per_day,
'phone_number' => $phone_number,
'user_no' => $user_no
]);


$db->query("UPDATE users SET password = :password, email = :email WHERE user_no = :user_no", [
'password' => password_hash($password, PASSWORD_DEFAULT),
'email' => $email,
'user_no' => $user_no
]);




$user_no = $_SESSION['user']['user_no'];


    // Your existing code...
    $targetDir = "public/resource/images/uploads/profile/";

    $targetFile = $targetDir . basename($user_no . $_FILES["profile_photo"]["name"]);
    // dd($targetFile);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the file is an actual image
    $check = getimagesize($_FILES["profile_photo"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size (limit to 5MB)
    if ($_FILES["profile_photo"]["size"] > 5 * 1024 * 1024) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    $allowedFormats = ["jpg", "jpeg", "png", "gif"];
    if (!in_array($imageFileType, $allowedFormats)) {
        echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["profile_photo"]["tmp_name"], $targetFile)) {
            // Update the database with the file path
            $user_no = $_SESSION['user']['user_no']; // Replace with the actual user ID
            $db = new Database();
            $profilePhotoPath = $db->quote($targetFile);
            // dd($profilePhotoPath);
            $db->query("UPDATE company SET logo = $profilePhotoPath WHERE user_no = :user_no", [
                'user_no' => $user_no
            ]);

            // header('location: /');
            // die();
            // echo "The file " . htmlspecialchars(basename($_FILES["profile_photo"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

// Your existing code...



header('location: /company/settings');
die();
}

$errors['password'] = "Password incorrect";
terminateWithError($errors, 'controllers/company/settings.php');