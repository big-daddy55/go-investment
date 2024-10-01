<?php


use Core\Database;

$user_no = $_SESSION['user']['user_no'];
$number_of_employees = $_POST['number_of_employees'];
$address = $_POST['address'];
$bio = $_POST['bio'];



$db = new Database();

$db->query("UPDATE company SET number_of_employees = :number_of_employees, address = :address, bio = :bio WHERE user_no = :user_no", [
    'number_of_employees' => $number_of_employees,
    'address' => $address,
    'bio' => $bio,
    'user_no' => $user_no
]);



$targetDir = "public/resource/images/uploads/profile/";

$targetFile = $targetDir . basename($user_no . $_FILES["logo"]["name"]);
// dd($targetFile);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Check if the file is an actual image
$check = getimagesize($_FILES["logo"]["tmp_name"]);
if ($check === false) {
    echo "File is not an image.";
    $uploadOk = 0;
}

// Check file size (limit to 5MB)
if ($_FILES["logo"]["size"] > 5 * 1024 * 1024) {
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
    if (move_uploaded_file($_FILES["logo"]["tmp_name"], $targetFile)) {
        // Update the database with the file path
        $userId = $_SESSION['user']['user_id']; // Replace with the actual user ID
        $db = new Database();
        $profilePhotoPath = $db->quote($targetFile);
        // dd($profilePhotoPath);
        $db->query("UPDATE company SET logo = :logo WHERE user_no = :user_no",[
            'logo' => $profilePhotoPath,
            'user_no' => $userId,

        ]);

header('location: /company/home');

    }
}