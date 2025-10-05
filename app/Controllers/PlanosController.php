<?php

namespace App\Controllers;

use App\Core\Controller;

class PlanosController extends Controller
{
    public function index()
    {
        $baseUrl = '/vdvagas';

        $dataheader = [
            'title' => 'VD Vagas',
            'page' => 'planos',
            'baseUrl' => $baseUrl
        ];

        $data = [
            'baseUrl' => $baseUrl
        ];

        $this->view('layouts/header', $dataheader);
        $this->view('planos/planos', $data);
        $this->view('layouts/footer', $data);
    }
}
