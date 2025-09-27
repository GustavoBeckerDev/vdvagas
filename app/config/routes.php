<?php

// Este arquivo define todas as rotas da aplicação.
// O roteador irá carregá-lo para saber o que fazer.

// Rota para a página inicial
$router->get('/', 'HomeController@index');

$router->get('/vagas', 'VagasController@index');

$router->get('/about', 'AboutController@index');

$router->get('/contato', 'ContatoController@index');

$router->get('/planos', 'PlanosController@index');




// // Rotas de Autenticação
// // A mesma URI pode ter ações diferentes para GET e POST
// $router->get('/auth', 'AuthController@index');        // Mostra o formulário de login
// $router->post('/auth/login', 'AuthController@login');   // Processa os dados do formulário
// $router->get('/auth/logout', 'AuthController@logout');  // Efetua o logout

// // Rota do Dashboard (protegida dentro do controller)
// $router->get('/dashboard', 'DashboardController@index');
