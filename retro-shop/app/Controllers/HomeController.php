<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        // Load the main view for the home page
        require_once '../app/Views/layouts/main.php';
    }
}