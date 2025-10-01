<?php
$logoPath = $baseUrl . "/public/imagens/logo.png";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'VD Vagas' ?></title>
    <!-- CSS do Header -->
    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/header.css">
    <!-- CSS da Home (ou páginas específicas) -->
    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/home.css">
    <!-- CSS de Planos (ou páginas específicas) -->
    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/planos.css">
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="<?= $logoPath ?>" alt="Logo VD Vagas">
        </div>
        <nav>
            <a href="<?= $baseUrl ?>/">Início</a><span class="separator">|</span>
            <a href="<?= $baseUrl ?>/vagas">Vagas</a><span class="separator">|</span>
            <a href="<?= $baseUrl ?>/about">Sobre Nós</a><span class="separator">|</span>
            <a href="<?= $baseUrl ?>/contato">Contato</a><span class="separator">|</span>
            <a href="<?= $baseUrl ?>/planos">Planos</a>
        </nav>
        <div class="header-buttons">
            <button class="btn btn-login">Login</button>
            <script>
                document.addEventListener('DOMContentLoaded',()=>{
                    const botaoLogin = document.querySelector(".btn-login");
                    console.log(botaoLogin)
                    let modalLogin = document.getElementById('dialogLog');

                    botaoLogin.addEventListener('click', ()=>{
                        modalLogin.toggleAttribute('open');
                    }); 
                });
            </script>

            <button class="btn btn-signup">Cadastre-se</button>

            <script>
                document.addEventListener('DOMContentLoaded',()=>{
                    const botaoCadastro = document.querySelector(".btn-signup");
                    console.log(botaoCadastro)
                    let modalCadastro = document.getElementById('dialogCad');

                    botaoCadastro.addEventListener('click', ()=>{
                        modalCadastro.toggleAttribute('open');
                    }); 
                });
            </script>
        </div>
        <div class="header-bottom-gradient"></div>
    </header>
