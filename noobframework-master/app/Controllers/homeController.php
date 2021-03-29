<?php
namespace App\Controllers;

use Core\Controller;

class homeController extends Controller {
    
    public function index() {
        $this->view('home');
    }
}