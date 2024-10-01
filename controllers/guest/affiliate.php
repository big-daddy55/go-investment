<?php

view('partials/head.php', [
    'title' => 'Affiliates'
]);
view("partials/guest-nav.php");
view('guest/affiliate.view.php');
view('partials/footer.php');
