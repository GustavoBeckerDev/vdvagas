<?php
// Garantir que $baseUrl esteja definido (fallback para BASE_PATH ou '/')
if (!isset($baseUrl)) {
    $baseUrl = defined('BASE_PATH') ? BASE_PATH : '';
}
$logoPath = $baseUrl . "/public/imagens/logo-trofeu.png";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'VD Vagas' ?></title>

    <!-- CSS principal -->
    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/header.css">
    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/home.css">
    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/home-pixel.css">
    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/footer.css">
    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/modals.css">

    <!-- CSS de páginas específicas -->
    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/planos.css">
    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/about.css">

    <!-- Fontes e ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=VT323&family=Orbitron:wght@400;700;900&family=Sansation:wght@300;400;700&family=Source+Serif+4:wght@200;400;700&display=swap" rel="stylesheet">
</head>

<!-- adicionamos o data-page para o CSS saber qual link destacar -->
<body data-page="<?= $page ?? '' ?>">
    <header class="header-pixel">
        <div class="header-particles"></div>
        
        <div class="header-content">
            <div class="logo-container-pixel">
                <div class="logo-frame">
                    <img src="<?= $logoPath ?>" alt="Logo VD Vagas">
                </div>
                <div class="logo-glow"></div>
            </div>

            <nav class="nav-pixel">
                <a href="<?= $baseUrl ?>/" class="nav-link">
                    <i class="fas fa-home link-icon"></i>
                    <span class="link-text">INÍCIO</span>
                </a>
                <a href="<?= $baseUrl ?>/vagas" class="nav-link">
                    <i class="fas fa-briefcase link-icon"></i>
                    <span class="link-text">VAGAS</span>
                </a>
                <a href="<?= $baseUrl ?>/about" class="nav-link">
                    <i class="fas fa-info-circle link-icon"></i>
                    <span class="link-text">SOBRE</span>
                </a>
                <a href="<?= $baseUrl ?>/contato" class="nav-link">
                    <i class="fas fa-envelope link-icon"></i>
                    <span class="link-text">CONTATO</span>
                </a>
                <a href="<?= $baseUrl ?>/planos" class="nav-link">
                    <i class="fas fa-star link-icon"></i>
                    <span class="link-text">PLANOS</span>
                </a>
            </nav>

            <div class="header-buttons-pixel">
                <button class="btn-pixel-header btn-login-pixel">
                    <i class="fas fa-sign-in-alt btn-icon"></i>
                    <span>LOGIN</span>
                </button>
                <button class="btn-pixel-header btn-signup-pixel">
                    <i class="fas fa-user-plus btn-icon"></i>
                    <span>CADASTRO</span>
                </button>
            </div>
        </div>

        <div class="header-bottom-gradient"></div>
    </header>

    <!-- Inclui os modais globais -->
    <?php include __DIR__ . '/modals.php'; ?>
    <!-- JS centralizado para modais -->
    <script src="<?= $baseUrl ?>/public/assets/modals.js"></script>
