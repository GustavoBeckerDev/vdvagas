<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/footer.css">
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Corben:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sansation:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/contato.css">
</head>
<body>

<main class="home">

    <!-- CONTATO -->
    <section class="contact">
        <h2 class="contact-title">Entre em Contato Conosco</h2>
        <p class="contact-subtitle">Tem alguma dúvida, sugestão ou parceria? Fale conosco!</p>

        <div class="contact-container">
            <!-- LADO ESQUERDO: FORMULÁRIO -->
            <div class="contact-left">
                <form class="contact-form" action="#" method="POST">
                    <label for="name"><i class="fa-solid fa-user"></i> Nome Completo</label>
                    <input type="text" id="name" name="name" placeholder="Seu nome completo" required>

                    <label for="email"><i class="fa-solid fa-envelope"></i> Email</label>
                    <input type="email" id="email" name="email" placeholder="Seu melhor email" required>

                    <label for="company"><i class="fa-solid fa-building"></i> Nome da Empresa (opcional)</label>
                    <input type="text" id="company" name="company" placeholder="Sua empresa">

                    <label for="message"><i class="fa-solid fa-comment-dots"></i> Mensagem</label>
                    <textarea id="message" name="message" placeholder="Escreva sua mensagem aqui..." required></textarea>

                    <button type="submit" class="contact-btn">Enviar Mensagem</button>
                </form>
            </div>

            <!-- LADO DIREITO: MAPA + INFORMAÇÕES -->
            <div class="contact-right">
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3529.9876910566713!2d-51.15222168452768!3d-27.006678882991655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e3e47b6d90b2d7%3A0xaaf4472dfc9c2e57!2sVideira%2C%20SC!5e0!3m2!1spt-BR!2sbr!4v1696532100000!5m2!1spt-BR!2sbr"
                        width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <div class="contact-info">
                    <h3><i class="fa-solid fa-headset"></i> Nossos Canais</h3>
                    <ul>
                        <li><i class="fa-solid fa-phone"></i> (49) 99999-9999</li>
                        <li><i class="fa-solid fa-envelope"></i> contato@vdvagas.com.br</li>
                        <li><i class="fa-solid fa-location-dot"></i> Videira - SC, Brasil</li>
                    </ul>

                    <h3 class="social-title"><i class="fa-solid fa-share-nodes"></i> Siga-nos</h3>
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
