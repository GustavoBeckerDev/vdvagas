<?php

namespace App\Controllers;

use App\Core\Controller;

class ContatoController extends Controller
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
        $this->view('contato/contato', $data);
        $this->view('layouts/footer', $data);
    }
}
