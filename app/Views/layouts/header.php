<?php
// Garantir que $baseUrl esteja definido (fallback para BASE_PATH ou '/')
if (!isset($baseUrl)) {
    $baseUrl = defined('BASE_PATH') ? BASE_PATH : '';
}
$logoPath = $baseUrl . "/public/imagens/logo.png";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'VD Vagas' ?></title>

    <!-- CSS principal -->
    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/header.css">
    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/home.css">
    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/modals.css">

    <!-- CSS de páginas específicas -->
    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/planos.css">
    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/about.css">

    <!-- Fontes e ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sansation:wght@300;400;700&family=Source+Serif+4:wght@200;400;700&display=swap" rel="stylesheet">
</head>

<!-- adicionamos o data-page para o CSS saber qual link destacar -->
<body data-page="<?= $page ?? '' ?>">
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

    <!-- Inclui os modais globais -->
    <?php include __DIR__ . '/modals.php'; ?>
    <!-- JS centralizado para modais -->
    <script src="<?= $baseUrl ?>/public/assets/modals.js"></script>
