<?php

namespace App\Controllers;

use App\Core\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $baseUrl = '/vdvagas';

        $dataheader = [
            'title' => 'VD Vagas',
            'page' => 'about',
            'baseUrl' => $baseUrl
        ];

        $data = [
            'baseUrl' => $baseUrl
        ];

        $this->view('layouts/header', $dataheader);
        $this->view('about/about', $data);
        $this->view('layouts/footer', $data);
    }
}
