<?php
$errors = isset($_GET['errors']) ? urldecode($_GET['errors']) : '';
// dd('individual');
view('partials/head.php', [
    'title' => 'Register'
]);

view('partials/guest-nav.php');

if (isset($errors)) {
    view('guest/account/create.view.php', [
        'errors' => $errors
    ]);   

}else if(isset($alert)) {
        view('guest/account/create.view.php', [
            'alert' => $alert
        ]);
} else{
        view('guest/account/create.view.php');
} 



view('partials/footer.php');



?>