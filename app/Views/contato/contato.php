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

    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/home.css">

</head>
<body>

<main class="home">


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
                <input type="text" id="company" name="company" placeholder="Company name">

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