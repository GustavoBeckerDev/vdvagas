<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sansation:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/sobre.css">
</head>
<body>

<main class="about-page">

    <!-- SEÇÃO PRINCIPAL SOBRE NÓS -->
    <section class="about">
        <h2 class="about-title">Sobre Nós</h2>

        <div class="about-intro">
            <div class="about-intro-text">
                <h3>Conectando Pessoas e Oportunidades</h3>
                <p>
                    O <strong>VDVagas</strong> nasceu com a missão de aproximar talentos e empresas, tornando o processo de recrutamento mais humano, moderno e acessível. 
                    Nosso foco está em criar uma plataforma intuitiva e eficiente, que valorize o potencial de cada candidato e simplifique o trabalho das empresas.
                </p>
                <p>
                    Acreditamos que a tecnologia pode ser uma ponte para o crescimento profissional e o desenvolvimento das comunidades locais. 
                    Por isso, trabalhamos com dedicação para entregar uma experiência digital fluida, funcional e repleta de propósito.
                </p>
            </div>
            <div class="about-intro-image">
                <img src="<?= $baseUrl ?>/public/imagens/capiprise.png" alt="Mascote VD Vagas">
            </div>
        </div>

        <!-- SEÇÃO DE CARDS EXPLICATIVOS (6 CARDS) -->
        <div class="about-features">
            <div class="feature-card">
                <i class="fa-solid fa-rocket"></i>
                <h3>Inovação Contínua</h3>
                <p>
                    Estamos em constante evolução, trazendo novidades e aprimoramentos para oferecer a melhor experiência aos nossos usuários.
                </p>
            </div>

            <div class="feature-card">
                <i class="fa-solid fa-people-group"></i>
                <h3>Foco na Comunidade</h3>
                <p>
                    Valorizamos talentos locais e acreditamos que as melhores oportunidades estão mais próximas do que imaginamos.
                </p>
            </div>

            <div class="feature-card">
                <i class="fa-solid fa-globe"></i>
                <h3>Plataforma Acessível</h3>
                <p>
                    Desenvolvemos um ambiente intuitivo, acessível e funcional, para conectar profissionais e empresas de forma rápida e direta.
                </p>
            </div>

            <div class="feature-card">
                <i class="fa-solid fa-heart"></i>
                <h3>Empatia e Propósito</h3>
                <p>
                    Mais do que vagas, buscamos criar conexões que impulsionam histórias, sonhos e trajetórias profissionais.
                </p>
            </div>

            <div class="feature-card">
                <i class="fa-solid fa-shield-halved"></i>
                <h3>Segurança e Transparência</h3>
                <p>
                    Prezamos pela segurança dos dados e pela transparência em todas as etapas do processo, garantindo confiança para empresas e candidatos.
                </p>
            </div>

            <div class="feature-card">
                <i class="fa-solid fa-gamepad"></i>
                <h3>Gamificação e Engajamento</h3>
                <p>
                    Tornamos a busca por emprego mais divertida e recompensadora, com conquistas, desafios e níveis que valorizam o progresso do usuário.
                </p>
            </div>
        </div>

        <!-- SEÇÃO DE GAMIFICAÇÃO -->
        <section class="gamification">
            <div class="gamification-content">
                <h2>Gamificando a Jornada de Buscar uma Vaga</h2>
                <p>
                    Transformamos a busca por emprego em uma <strong>experiência motivadora e divertida</strong>. 
                    No VDVagas, o candidato é o protagonista da sua própria jornada, conquistando medalhas, pontos e níveis ao completar metas como:
                </p>

                <ul class="gamification-list">
                    <li><i class="fa-solid fa-medal"></i> Criar um perfil completo e atraente</li>
                    <li><i class="fa-solid fa-trophy"></i> Candidatar-se a oportunidades que combinam com suas habilidades</li>
                    <li><i class="fa-solid fa-star"></i> Participar de desafios e receber feedbacks personalizados</li>
                    <li><i class="fa-solid fa-crown"></i> Alcançar conquistas e desbloquear vantagens exclusivas</li>
                </ul>

                <p>
                    Acreditamos que gamificar é tornar o aprendizado e o crescimento profissional mais envolvente. 
                    Cada etapa é uma conquista, e cada conquista aproxima você do seu futuro emprego.
                </p>
            </div>
        </section>
    </section>

    <!-- NOSSA EQUIPE -->
    <section class="team-section">
        <div class="team-section-header">
            <h2 class="team-title">Quem faz acontecer</h2>
            <div class="team-divider"></div>
            <div class="team-right">
                <h3 class="team-subtitle">Nossa equipe</h3>
                <p class="team-text">
                    Nada surge do nada; nossa equipe rápida e inteligente é perfeita 
                    para o melhor desenvolvimento da melhor aplicação.
                </p>
            </div>
        </div>

        <div class="team">
            <div class="team-card">
                <img src="<?= $baseUrl ?>/public/imagens/zack.png" alt="Zack Zayyr Gomes da Silva">
                <h3>Zack Zayyr Gomes da Silva</h3>
                <p><strong>Função:</strong> Back end e agregação com novas ideias</p>
                <p><strong>Principais habilidades:</strong> Organização e otimização de código</p>
            </div>

            <div class="team-card">
                <img src="<?= $baseUrl ?>/public/imagens/waldair.png" alt="Waldair Otto">
                <h3>Waldair Otto</h3>
                <p><strong>Função:</strong> Front end e slides</p>
                <p><strong>Principais habilidades:</strong> Mago dos Slides</p>
            </div>

            <div class="team-card">
                <img src="<?= $baseUrl ?>/public/imagens/img_gu.jpg" alt="Gustavo Becker">
                <h3>Gustavo Becker</h3>
                <p><strong>Função:</strong> Monitorar e apresentar</p>
                <p><strong>Principais habilidades:</strong> Mago do Git, faz de tudo um pouco </p>
            </div>

            <div class="team-card">
                <img src="<?= $baseUrl ?>/public/imagens/leticia.png" alt="Letícia Stédile Maidana">
                <h3>Letícia Stédile Maidana</h3>
                <p><strong>Função:</strong> Front end, fornecer e organizar a documentação</p>
                <p><strong>Principais habilidades:</strong> Maga do Miro</p>
            </div>

            <div class="team-card">
                <img src="<?= $baseUrl ?>/public/imagens/leandro.png" alt="Leandro Fossatti">
                <h3>Leandro Fossatti</h3>
                <p><strong>Função:</strong> Banco de Dados, pontuar e refletir sobre novas ideias</p>
                <p><strong>Principais habilidades:</strong> Possui grande experiência sobre tudo</p>
            </div>
        </div>
    </section>

    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/footer.css">
</main>

</body>
</html>
