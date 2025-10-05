<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sansation:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

<main class="home">

    <!-- HERO -->
    <section class="hero">
        <div class="hero-text">
            <h1>As melhores oportunidades da sua região</h1>
            <p>
                Para o VDVagas você é prioridade, seja na busca do primeiro emprego, 
                de uma melhor oportunidade, ou dos melhores talentos do mercado.
            </p>
            <div class="hero-buttons">
                <a href="#" class="btn btn-green open-signup-modal">Experimente Grátis</a>
                <a href="<?= $baseUrl ?>/planos" class="btn btn-yellow">Nossos Planos</a>
            </div>
        </div>
        <div class="hero-image">
            <img src="<?= $baseUrl ?>/public/imagens/home4.png" alt="Mockup Site">
        </div>
    </section>

    <!-- JOBS -->
    <section class="jobs">
        <h2>Conheça as vagas mais próximas de você</h2>
        <div class="filters">
            <select><option>Localidade</option></select>
            <select><option>Área</option></select>
            <select><option>Data</option></select>
            <select><option>Tipo de vaga</option></select>
        </div>
        <div class="jobs-grid">
            <?php for ($i = 0; $i < 9; $i++): ?>
                <div class="job-card">
                    <h3>Estágio Suporte</h3>
                    <p>
                        Atuar na área de suporte aos clientes.  
                        Atendimento remoto e presencial.  
                        Necessário estar cursando ensino superior em áreas afins.
                    </p>
                </div>
            <?php endfor; ?>
        </div>
        <div class="see-all">
            <a href="#" class="btn btn-green">CONHEÇA TODAS AS VAGAS</a>
        </div>
    </section>

    <!-- SOBRE NÓS (mantida igual) -->
    <section class="about">
        <h2 class="about-title">Sobre Nós</h2>
        <p class="about-subtitle">
            Nossa missão é conectar talentos e oportunidades de forma moderna, eficiente e humana.
        </p>

        <div class="about-cards">
            <div class="about-card">
                <i class="fa-solid fa-lightbulb"></i>
                <h3>Inovação</h3>
                <p>
                    Buscamos constantemente novas formas de simplificar o processo de contratação e destacar o potencial de cada profissional.
                </p>
            </div>

            <div class="about-card">
                <i class="fa-solid fa-handshake"></i>
                <h3>Confiança</h3>
                <p>
                    Acreditamos que parcerias transparentes e relações sólidas são a base para resultados duradouros.
                </p>
            </div>

            <div class="about-card">
                <i class="fa-solid fa-globe"></i>
                <h3>Conexão</h3>
                <p>
                    Criamos pontes entre empresas e candidatos, valorizando talentos locais e fortalecendo comunidades.
                </p>
            </div>
        </div>

        <div class="about-modern">
            <div class="about-modern-text">
                <h3>Por que um site de vagas moderno?</h3>
                <p>
                    Em um mundo digital e acelerado, é essencial oferecer um ambiente intuitivo, centralizado e acessível.  
                    O VDVagas foi desenvolvido com essa visão — unir tecnologia, design e praticidade para facilitar o encontro entre empresas e talentos da sua região.
                </p>
                <a href="<?= $baseUrl ?>/planos" class="btn btn-green">Saiba Mais</a>
            </div>
            <div class="about-modern-image">
                <img src="<?= $baseUrl ?>/public/imagens/home3.png" alt="Ilustração moderna">
            </div>
        </div>
    </section>

    <!-- CONTATO (nova versão com mapa e redes sociais) -->
    <section class="contact">
        <h2 class="contact-title">Contato</h2>

        <div class="contact-container">
            <!-- Lado esquerdo: formulário -->
            <div class="contact-left">
                <form class="contact-form" action="#" method="POST">
                    <label for="name">Nome Completo</label>
                    <input type="text" id="name" name="name" placeholder="Seu nome" required>

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Seu email" required>

                    <label for="company">Nome da Empresa (Opcional)</label>
                    <input type="text" id="company" name="company" placeholder="Sua empresa">

                    <label for="message">Mensagem</label>
                    <textarea id="message" name="message" placeholder="Escreva sua mensagem aqui..." required></textarea>

                    <div class="recaptcha-wrapper">
                        <input type="checkbox" id="not_robot" name="not_robot" required>
                        <label for="not_robot">Eu não sou um robô</label>
                    </div>

                    <button type="submit" class="contact-btn">Confirmar</button>
                </form>
            </div>

            <!-- Lado direito: mapa e redes sociais -->
            <div class="contact-right">
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3529.9876910566713!2d-51.15222168452768!3d-27.006678882991655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e3e47b6d90b2d7%3A0xaaf4472dfc9c2e57!2sVideira%2C%20SC!5e0!3m2!1spt-BR!2sbr!4v1696532100000!5m2!1spt-BR!2sbr"
                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <div class="contact-info">
                    <h3>Nos siga nas redes sociais</h3>
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

    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/footer.css">
</main>

</body>
</html>
