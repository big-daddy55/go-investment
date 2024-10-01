<?php

view('partials/head.php', [
    'title' => 'faq'
]);
view("partials/guest-nav.php");
view('guest/faq.view.php');
view('partials/footer.php');
