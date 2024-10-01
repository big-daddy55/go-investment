<?php

namespace Core\Middleware;

class User
{
    public function handle()
    {
        
        if (isset($_SESSION['user']) ?? false) {
            
            $user = $_SESSION['user'];
            if ($user['user_type'] !== 'individual') {
            // dd($_SESSION['user']);
                $databaseUserTypes = require base_path('database/user_types.php');
                foreach ($databaseUserTypes as $user_type) {
                    if ($_SESSION['user']['user_type'] === $user_type['user_type']) {
                        // dd($user_type['location']);
                        header("location: {$user_type['location']}");
                        die();
                    }
                }
            }
        }else{

        header("location: /");
        exit();
    }
}
}
