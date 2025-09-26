<?php

// Este arquivo define todas as rotas da aplicação.
// O roteador irá carregá-lo para saber o que fazer.

// Rota para a página inicial
$router->get('/', function() {
    // Redireciona a raiz do projeto para /inicio
    header('Location: /vdvagas/inicio');
    exit;
});

// Rota /vdvagas também para garantir acesso direto
$router->get('/vdvagas', function() {
    header('Location: /vdvagas/inicio');
    exit;
});

// Rota /inicio para a página inicial de fato
$router->get('/inicio', 'HomeController@index');
$router->get('/', 'HomeController@index');
$router->get('/vdvagas', 'HomeController@index');

// // Rotas de Autenticação
// // A mesma URI pode ter ações diferentes para GET e POST
// $router->get('/auth', 'AuthController@index');        // Mostra o formulário de login
// $router->post('/auth/login', 'AuthController@login');   // Processa os dados do formulário
// $router->get('/auth/logout', 'AuthController@logout');  // Efetua o logout

// // Rota do Dashboard (protegida dentro do controller)
// $router->get('/dashboard', 'DashboardController@index');
