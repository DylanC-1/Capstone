<?php

namespace App\Middleware;

use App\Models\User;

class AuthMiddleware
{
    public function handle($request, $next)
    {
        session_start();

        if (!isset($_SESSION['user_id'])) {
            header('Location: /login.php');
            exit();
        }

        return $next($request);
    }
}