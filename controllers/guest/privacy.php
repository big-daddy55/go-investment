<?php

view('partials/head.php', [
    'title' => 'Privacy Policy'
]);
view("partials/guest-nav.php");
view('guest/privacy.view.php');
view('partials/footer.php');
