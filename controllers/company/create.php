<?php

// dd('business');




view('partials/head.php', [
    'title' => 'Create A Free Account'
]);

view('partials/guest-nav.php');

if (isset($errors)) {
    view('company/create.view.php', [
        'errors' => $errors
    ]);
} else{
      view('company/create.view.php');
}






view('partials/footer.php');
