<?php


function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function base_path($path, $attributes = [])
{
    extract($attributes);
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);
    // dd($attributes);
    require base_path('views/' . $path);
}

function dd($obj)
{
    var_dump($obj);
    die();
}

function login($user)
{
    $_SESSION['user'] = [
        'user_id' => $user['user_id'],
        'email' => $user['email'],
        'user_type' => $user['user_type'],
        'user_no' => $user['user_no'],
        // 'profile_photo' => $user['profile_photo']
    ];

    session_regenerate_id(true);
    return $_SESSION['user'];
}

function checkuser($FormUserType)
{
    $DatabaseUserTypes = require base_path('database/user_types.php');


    foreach ($DatabaseUserTypes as $user_type) {
        if ($FormUserType === $user_type['user_type']) {
            header("location: {$user_type['location']}");
            exit();
        }
    }
}

function createAbbreviation($word)
{
    $word = str_replace(' ', '', $word);

    // Get the first letter
    $firstLetter = $word[0];

    // Get the middle letter
    $length = strlen($word);
    
    if ($length % 2 == 0) {
        $middleIndex = intval($length / 2 - 1);
        // dd($middleIndex);
    } else {
        $middleIndex = intval($length / 2);
    }
    $middleLetter = $word[$middleIndex];

    // dd($middleLetter);

    // Get the last letter
    $lastLetter = $word[$length - 1];

    // Combine the letters to form the abbreviation
    $abbreviation = $firstLetter . $middleLetter . $lastLetter;

    $abbreviation = strtoupper($abbreviation);
    

    return $abbreviation;
}

function terminateWithError($errors, $path)
{
    if (!empty($errors)) {
        require base_path($path, [
            'errors' => $errors
        ]);
        die();
    }
}

function logout(){

    $_SESSION = [];
    session_destroy();

    $params = session_get_cookie_params();
    setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);

}

// function generateUserId($role) {
//     // Define role prefixes
//     $rolePrefixes = [
//         'teacher' => 'TEA',
//         'parent' => 'PAR',
//         'student' => 'STU',
//         // Add more roles as needed
//     ];

//     // Check if the role is valid
//     if (!array_key_exists($role, $rolePrefixes)) {
//         // Handle invalid role (you can throw an exception or return an error)
//         return "Invalid Role";
//     }

//     // Get the prefix for the specified role
//     $prefix = $rolePrefixes[$role];

//     // Generate a unique random three-digit number
//     $randomNumber = str_pad(mt_rand(1, 999), 3, '0', STR_PAD_LEFT);

//     // Concatenate the prefix and the random number
//     $userId = $prefix . $randomNumber;

//     return $userId;
// }

// function check_balance($amount){

// }



?>