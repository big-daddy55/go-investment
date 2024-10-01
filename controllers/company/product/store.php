<?php

use Core\Database;

$user_no = $_SESSION['user']['user_no'];
$product_name = $_POST['product_name'];
$description = $_POST['description']; 
$price = $_POST['price'];

// dd($description);


$db = new Database();

$targetDir = "public/resource/images/uploads/profile/";
$targetFile = $targetDir . basename($user_no . $_FILES["logo"]["name"]);
$dtargetFile = '/' .$targetDir . basename($user_no . $_FILES["logo"]["name"]);
// dd($targetFile);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($dtargetFile, PATHINFO_EXTENSION));
// Check if the file is an actual image
$check = getimagesize($_FILES["logo"]["tmp_name"]);
if ($check === false) {
    echo "File is not an image.";
    $uploadOk = 0;
}
// // Check file size (limit to 5MB)
// if ($_FILES["logo"]["size"] > 5 * 1024 * 1024) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }
// Allow certain file formats
$allowedFormats = ["jpg", "jpeg", "png", "gif"];
if (!in_array($imageFileType, $allowedFormats)) {
    echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
    $uploadOk = 0;
}

if ($uploadOk == 1) {

    if (move_uploaded_file($_FILES["logo"]["tmp_name"], $targetFile)) {
            // dd($targetFile);

        // Update the database with the file path
        $user_no = $_SESSION['user']['user_no']; // Replace with the actual user ID
        $db = new Database();
        $profilePhotoPath = $db->quote($dtargetFile);

        // dd($profilePhotoPath);

        $db->query("INSERT INTO product (user_no, product_name, description, price, logo) VALUES (:user_no, :product_name, :description, :price, :profilePhotoPath)", [
            'user_no' => $user_no,
            'product_name' => $product_name,
            'description' => $description,
            'price' => $price,
            'profilePhotoPath' => $profilePhotoPath
        ]);
        // dd($profilePhotoPath);
        // $db->query("UPDATE product SET logo = $profilePhotoPath WHERE user_no = :user_no", [
        //     'user_no' => $user_no,

        // ]);
    }
    else{
        echo "Sorry, there was an error uploading your file.";
        die();
    }
}


// Your existing code...



// Your existing code...


header('location: /company/product/list');

die();
?>