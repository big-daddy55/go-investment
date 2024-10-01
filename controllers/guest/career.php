<?php

view('partials/head.php', [
    'title' => 'Careers'
]);
view("partials/guest-nav.php");
view('guest/career.view.php');
view('partials/footer.php');
