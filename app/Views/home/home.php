<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Corben:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/home.css">

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
                <a href="#" class="btn btn-green">Experimente Grátis</a>
                <a href="<?= $baseUrl ?>/planos" class="btn btn-yellow">Nossos Planos</a>
            </div>
        </div>
        <div class="hero-image">
            <img src="<?= $baseUrl ?>/public/imagens/capi.png" alt="Mascote Capivara">
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
            <?php for ($i = 0; $i < 6; $i++): ?>
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
                    <img src="/vdvagas/public/imagens/capi_conputer.png" alt="Imagem sobre nós">
                </div>
                <div class="about-right-text">
                    <p>
                        Somos a mente por trás da ideia — uma equipe ágil, curiosa e apaixonada por transformar necessidades em soluções digitais. Criamos este site de vagas com o objetivo de conectar talentos a oportunidades reais, com tecnologia, organização e, claro, aquele toque especial que só uma equipe alinhada consegue entregar.
                    </p>
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

    <!-- CONTATO -->
    <section class="contact">
        <h2 class="contact-title">Contato</h2>

        <!-- formulário -->
        <div class="contact-wrapper">
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
    </section>

    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/footer.css">
    
</main>

</body>
</html>
