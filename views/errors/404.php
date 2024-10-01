<?php

use Core\Database;

$db = new Database();


if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['user_type'] === 'individual') {

        $user_no = $_SESSION['user']['user_no'];

        $user = $db->query("SELECT * FROM client WHERE user_no = :user_no", [
            'user_no' => $user_no
        ])->find();

        $wallet = $db->query("SELECT * FROM wallet WHERE user_no = :user_no", [
            'user_no' => $user_no
        ])->find();

        view(
            'partials/user/head.php',
            [
                'title' => 'Page Not Found'
            ]
        );

        view("partials/user/nav.php", [
            'user' => $user,
            'wallet' => $wallet
        ]);

?>
        <main class="error-main" style="display:flex;flex-direction:column;height:60vh; align-items:center; justify-content:center; color:white">
        <?php
    } elseif ($_SESSION['user']['user_type'] === 'business') {

        view('partials/company/head.php', [
            'title' => 'Page Not Found'
        ]);


        view("partials/company/side-nav.php");
        ?>
            <main class="error-main" style="display:flex;flex-direction:column;height:100vh; align-items:center; justify-content:center; color:white; margin-left:18vw; width:100%">
            <?php
        }
    } else {
        view('partials/head.php', [
            'title' => 'Get In Touch'
        ]);
        view('/partials/guest-nav.php');

            ?>
            <main class="error-main" style="display:flex;flex-direction:column;height:60vh; align-items:center; justify-content:center; color:white">
            <?php
        }
            ?>


            <h2 style="font-size: 3em; color:white">Not Available At The Moment</h2>
            <p style="font-size: 2em; color:white">Page not Found</p>
            <a href="/" style="border: 1px solid white; padding: 0.8vw; border-radius:17px; color:white">Go back home</a>
            </main>

            <?php
            if(!isset($_SESSION['user'])){
                view('partials/footer.php');
            }
            ?>