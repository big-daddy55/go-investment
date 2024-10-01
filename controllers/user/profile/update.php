<?php

use Core\Database;
use Core\Validator;

$user_no = $_SESSION['user']['user_no'];


$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$phoneNumber = $_POST['phone_number'];
$email = $_POST['email'];
$dob = strval($_POST['dob']);
$country = $_POST['country'];
$currentPassword = $_POST['current_password'];
$password = $_POST['password'];

$errors = [];

if (!Validator::string($phoneNumber, 10, 10)) {
    $errors['phone_number'] = 'Phone Number must be 10 characters long';
}
terminateWithError($errors, 'controllers/user/profile/create.php');

$db = new Database();


$user = $db->query("SELECT * FROM client WHERE user_no = :user_no", [
        'user_no' => $user_no
    ])->find();

//checkk if current password matches the hashed password in the database
if (password_verify($currentPassword, $user['password'])) {
    if (!Validator::email($email)) {
        $errors['email'] = 'Please provide a valid email address';
    }
    terminateWithError($errors, 'views/guest/sessions/create.view.php');


    if (!Validator::string($password, 8, 100)) {
        $errors['password'] = 'Password must be at least 8 characters long';
    }
    terminateWithError($errors, 'views/user/settings.view.php');

    $db->query("UPDATE client SET first_name = :first_name, last_name = :last_name, email = :email, password = :password,  phone_number = :phone_number, dob = :dob, country = :country WHERE user_no = :user_no", [
        'first_name' => $firstName,
        'last_name' => $lastName,
        'email' => $email,
        'phone_number' => $phoneNumber,
        'country' => $country,
        'dob' => $dob,
        'user_no' => $user_no,
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ]);

   





$user_no = $_SESSION['user']['user_no'];
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
        $db->query("UPDATE client SET profile_photo=$profilePhotoPath WHERE user_no=$user_no");

        header('location: /');
        die();
        echo "The file " . htmlspecialchars(basename($_FILES["profile_photo"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


    header('location: /user/settings');
}
