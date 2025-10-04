 <!-- SOBRE NÓS -->
    <section class="about">
        <h2 class="about-title">Sobre Nós</h2>

        <!-- Faixa degradê preto → verde → preto -->
        <div class="about-banner-bg">
            <!-- Texto acima do retângulo, centralizado -->
            <div class="about-top-text">
            <p><strong>Empresa com matriz em Videira - SC</strong><br>
            Focada em atingir públicos locais.</p>
        </div>

        <!-- Retângulo preto centralizado -->
        <div class="about-banner">
            <div class="about-image">
                <img src="<?= $baseUrl ?>/public/imagens/capiprise.png" alt="Mascote Capivara Terno">
            </div>
            <div class="about-right-text">
                <p>
                    Somos uma equipe formada no Senac Videira (SC), a partir do Projeto Integrador, 
                    com o objetivo de desenvolver uma plataforma voltada para oportunidades de trabalho.
                </p>
                <p>
                    Nosso site nasceu da necessidade de criar um espaço que conecte empresas e profissionais, 
                    oferecendo praticidade, transparência e eficiência no processo de divulgação e busca por vagas.
                </p>
                <p>
                    Mais do que cumprir um desafio acadêmico, buscamos aplicar de forma prática os conhecimentos 
                    adquiridos em sala de aula, entregando uma solução que gera valor para a comunidade local e regional.
                </p>
                <p>
                    Acreditamos que iniciativas como esta podem abrir portas, aproximar talentos de empregadores 
                    e contribuir para o desenvolvimento profissional de muitas pessoas.
                </p>

                <!-- Redes sociais -->
                <div class="social-icons">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- NOSSA EQUIPE -->
<section class="team-section">
    <div class="team-section-header">
        <!-- Coluna da esquerda -->
        <h2 class="team-title">Quem faz acontecer</h2>

        <!-- Linha separadora -->
        <div class="team-divider"></div>

        <!-- Coluna da direita -->
        <div class="team-right">
            <h3 class="team-subtitle">Nossa equipe</h3>
            <p class="team-text">
                Nada surge do nada; nossa equipe rápida e inteligente é perfeita 
                para o melhor desenvolvimento da melhor aplicação.
            </p>
        </div>
    </div>

    <!-- Cards -->
    <div class="team">
        <div class="team-card">
            <img src="<?= $baseUrl ?>/public/imagens/zack.png" alt="Zack Zayyr Gomes da Silva">
            <h3>Zack Zayyr Gomes da Silva</h3>
            <p><strong>Função:</strong> Agregar com novas ideias</p>
            <p><strong>Principais habilidades:</strong> Organização e otimização de código</p>
        </div>

        <div class="team-card">
            <img src="<?= $baseUrl ?>/public/imagens/waldair.png" alt="Waldair Otto">
            <h3>Waldair Otto</h3>
            <p><strong>Função:</strong> Slides</p>
            <p><strong>Principais habilidades:</strong> Mago dos Slides</p>
        </div>

        <div class="team-card">
            <img src="<?= $baseUrl ?>/public/imagens/gustavo.png" alt="Gustavo Becker">
            <h3>Gustavo Becker</h3>
            <p><strong>Função:</strong> Apresentar</p>
            <p><strong>Principais habilidades:</strong> Agregar com ideias e bom diálogo</p>
        </div>

        <div class="team-card">
            <img src="<?= $baseUrl ?>/public/imagens/leticia.png" alt="Letícia Stédile Maidana">
            <h3>Letícia Stédile Maidana</h3>
            <p><strong>Função:</strong> Fornecer e organizar a documentação</p>
            <p><strong>Principais habilidades:</strong> Maga do Miro</p>
        </div>

        <div class="team-card">
            <img src="<?= $baseUrl ?>/public/imagens/leandro.png" alt="Leandro Fossatti">
            <h3>Leandro Fossatti</h3>
            <p><strong>Função:</strong> Pontuar e refletir sobre novas ideias</p>
            <p><strong>Principais habilidades:</strong> Possui grande experiência sobre tudo</p>
        </div>
    </div>
</section>

<link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/footer.css">
</main>
