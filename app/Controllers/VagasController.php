<?php

namespace App\Controllers;

use App\Core\Controller;

class VagasController extends Controller
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
        $this->view('vagas/vagas', $data);
        $this->view('layouts/footer', $data);
    }
}
