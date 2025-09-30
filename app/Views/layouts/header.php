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
    <link rel="stylesheet" href="<?= $baseUrl ?>../public/assets/planos.css">
    
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
            <button class="btn btn-signup">Cadastre-se</button>
        </div>
        <div class="header-bottom-gradient"></div>
    </header>
