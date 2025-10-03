<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $baseUrl = '/vdvagas';

        $dataheader = [
            'title' => 'VD Vagas',
            'baseUrl' => $baseUrl
        ];

        $data = [
            'baseUrl' => $baseUrl
        ];

        $this->view('layouts/header', $dataheader);
        $this->view('modal/modalCadastro');
        $this->view('modal/modalLogin', $data);
        $this->view('home/home', $data);
        $this->view('layouts/footer', $data);
    }
}
