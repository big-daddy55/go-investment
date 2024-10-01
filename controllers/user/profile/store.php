<?php

use Core\Database;
use Core\Validator;

$user_no = $_SESSION['user']['user_no'];

$phoneNumber = $_POST['phone_number'];
$dob = strval($_POST['dob']);
$country = $_POST['country'];
$walletName = $_POST['wallet_name'];
$errors = [];

if (!Validator::string($phoneNumber, 10, 10)) {
    $errors['phone_number'] = 'Phone Number must be 10 characters long';
}
terminateWithError($errors, 'controllers/user/profile/create.php');

$db = new Database();

$lastWalletId = $db->query("SELECT wallet_id FROM wallet ORDER BY wallet_id DESC LIMIT 1")->fetchColumn();




// Step 3: Increment the numeric part
$newNumericPart = $lastWalletId + 1;



// Step 4: Format the new wallet ID
$walletNumber = "WAL" . sprintf('%03d', $newNumericPart);

// dd($walletNumber);


$db->query("UPDATE client SET phone_number = :phone_number, dob = :dob, country = :country WHERE user_no = :user_no", [
    'phone_number' => $phoneNumber,
    'dob' => $dob,
    'country' => $country,
    'user_no' => $user_no,
]);


$db->query("INSERT INTO wallet (user_no, wallet_name, wallet_number) VALUES(:user_no, :wallet_name, :wallet_number)",[
    'user_no' => $user_no,
    'wallet_name' => $walletName,
    'wallet_number' => $walletNumber
]);


$user_no = $_SESSION['user']['user_no'];
$targetDir = "public/resource/images/uploads/profile/";

    $targetFile = $targetDir . basename($user_no . $_FILES["profile_photo"]["name"]);
    $dtargetFile ='/' . $targetDir . basename($user_no . $_FILES["profile_photo"]["name"]);
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
            $profilePhotoPath = $db->quote($dtargetFile);
            // dd($profilePhotoPath);
            $db->query("UPDATE client SET profile_photo= :profilePhotoPath WHERE user_no= :user_no",[
                'user_no' => $user_no,
                'profilePhotoPath'=> $profilePhotoPath
            ]);
            
            header('location: /');
            die();
            echo "The file " . htmlspecialchars(basename($_FILES["profile_photo"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

?>