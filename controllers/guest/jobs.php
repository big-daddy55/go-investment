<?php

use Core\Database;

$db = new Database();

$jobs = $db->query("SELECT * FROM jobs")->findAll();


view('partials/head.php', [
    'title' => 'GO'
]);
view("partials/guest-nav.php");
view('guest/index.view.php', [
    'companies' => $jobs
]);
view('partials/footer.php');
