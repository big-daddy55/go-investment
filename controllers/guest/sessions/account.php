<?php

view('partials/head.php', [
    'title' => 'Login'
]);

view('partials/guest-nav.php');

view('guest/sessions/account.view.php');

view('partials/footer.php');
