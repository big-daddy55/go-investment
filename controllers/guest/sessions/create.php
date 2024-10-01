<?php

// if(isset($errors)){
// dd($errors);
// }

view('partials/head.php', [
    'title' => 'Login'
]);

view('partials/guest-nav.php');

if (isset($errors)) {
    view('guest/sessions/create.view.php', [
        'errors' => $errors
    ]);
}

If(isset($_GET['alert'])){
    $alert = $_GET['alert'];

}


if (isset($alert)){
    view('guest/sessions/create.view.php', [
        'alert' => $alert
    ]);
} else {
    view('guest/sessions/create.view.php');
}

view('partials/footer.php');
