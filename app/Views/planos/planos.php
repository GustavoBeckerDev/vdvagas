<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<main class="planos">

    <!-- Título principal -->
    <h1 class="main-title">Tipos de Planos e seus Benefícios</h1>   

    <!-- Banner com os títulos -->
    <section class="menu-planos">
        <div class="planos-banner">
            
           
            
        </div>

        <!-- Cards dos planos -->
        <div class="card-planos">
            <!-- Plano Free -->
            <div class="card">
                <h2 class="plano-title">Plano Free</h2>
                <p>Descubra oportunidades ou publique suas vagas. Tudo isso de forma gratuita.</p>
                <p>Com limitações de acesso e recursos.</p>
            </div>

            <!-- Plano User -->
            <div class="card">
                 <h2 class="plano-title">Plano User</h2>
                <p>Os usuários contarão com acesso antecipado às oportunidades.</p>
                <p>Maior visibilidade de seus perfis e candidaturas ilimitadas às vagas disponíveis.</p>
            </div>

            <!-- Plano Enterprise -->
            <div class="card">
                <h2 class="plano-title">Plano Enterprise</h2>
                <p>Publique vagas ilimitadas, personalize seus anúncios.</p>
                <p>Tenha mais visibilidade e filtros avançados para encontrar os melhores talentos!</p>
            </div>
        </div>
    </section>

    <!-- Seleção de planos -->
    <section class="select-planos">
        <div class="select-banner-bg">
            
            <h2>Selecione o plano que deseja</h2>

            <div class="select-card">
                <!-- Premium User -->
                <div class="card-premium">
                    <h3 class="card-title">Premium User</h3>
                    <ul class="card-list">
                        <li>Acesso antecipado</li>
                        <li>Maior visibilidade de seus perfis</li>
                        <li>Candidaturas ilimitadas às vagas disponíveis</li>
                    </ul>
                </div>

                <!-- Premium Enterprise -->
                <div class="card-premium">
                    <h3 class="card-title">Premium Enterprise</h3>
                    <ul class="card-list">
                        <li>Vagas ilimitadas</li>
                        <li>Personalize seus anúncios</li>
                        <li>Mais visibilidade</li>
                        <li>Filtros avançados</li>
                    </ul>
                </div>
            </div>

            <!-- Botão assinar -->
            <div class="assinar-button">
                <input type="button" value="Assinar" id="sign-plan">
            </div>

        </div>
    </section>

    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/footer.css">
</main>
