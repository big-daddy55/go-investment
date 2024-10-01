<?php

view('partials/head.php', [
    'title' => 'Terms & Conditions'
]);
view("partials/guest-nav.php");
view('guest/terms.view.php');
view('partials/footer.php');