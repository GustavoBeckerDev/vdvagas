<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $dataheader = [
            'title' => 'VD Vagas',
            'page' => 'home',
        ];

        $this->view('layouts/header', $dataheader);
        $this->view('home/home');
        $this->view('layouts/footer');
    }
}
