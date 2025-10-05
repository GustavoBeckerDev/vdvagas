<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vagas | VD Vagas</title>

    <link rel="stylesheet" href="/vdvagas/public/assets/vagas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

<main class="vagas">

    <!-- HERO -->
    <section class="vagas-hero">
        <div class="vagas-hero-text">
            <h1>🚀 Encontre a vaga perfeita para você</h1>
            <p>
                Explore oportunidades incríveis e descubra o trabalho que combina com o seu talento.  
                Filtre por localidade, área e tipo de contrato para uma experiência personalizada.
            </p>
        </div>
    </section>

    <!-- FILTROS -->
    <section class="vagas-filtros">
        <div class="barra-pesquisa">
            <input type="text" placeholder="🔍 Pesquise uma vaga ou cargo...">
        </div>
        <div class="filtros">
            <select>
                <option>📍 Localização</option>
            </select>
            <select>
                <option>💰 Faixa salarial</option>
            </select>
            <select>
                <option>🕒 Tipo de vaga</option>
            </select>
        </div>
    </section>

    <!-- LISTA DE VAGAS -->
    <section class="vagas-grid">
        <div class="vaga-card">
            <div class="vaga-icone"><i class="fa-solid fa-briefcase"></i></div>
            <h3>Desenvolvedor Front-end</h3>
            <p>Atue na criação de interfaces modernas e responsivas. Experiência com HTML, CSS e JavaScript.</p>
            <a href="#" class="btn btn-green">Candidatar-se</a>
        </div>

        <div class="vaga-card">
            <div class="vaga-icone"><i class="fa-solid fa-laptop-code"></i></div>
            <h3>Desenvolvedor Back-end</h3>
            <p>Responsável pela lógica e estrutura do sistema. Conhecimento em PHP, MySQL e APIs REST.</p>
            <a href="#" class="btn btn-green">Candidatar-se</a>
        </div>

        <div class="vaga-card">
            <div class="vaga-icone"><i class="fa-solid fa-headset"></i></div>
            <h3>Atendente de Suporte</h3>
            <p>Atendimento aos clientes via chat e e-mail. Boa comunicação e empatia são essenciais.</p>
            <a href="#" class="btn btn-green">Candidatar-se</a>
        </div>

        <div class="vaga-card">
            <div class="vaga-icone"><i class="fa-solid fa-chart-line"></i></div>
            <h3>Analista de Marketing</h3>
            <p>Criação de campanhas digitais e análise de métricas para crescimento de marca e vendas.</p>
            <a href="#" class="btn btn-green">Candidatar-se</a>
        </div>

        <div class="vaga-card">
            <div class="vaga-icone"><i class="fa-solid fa-palette"></i></div>
            <h3>Designer Gráfico</h3>
            <p>Crie identidades visuais e materiais gráficos para empresas e campanhas digitais.</p>
            <a href="#" class="btn btn-green">Candidatar-se</a>
        </div>

        <div class="vaga-card">
            <div class="vaga-icone"><i class="fa-solid fa-user-tie"></i></div>
            <h3>Consultor Comercial</h3>
            <p>Prospecção de novos clientes e manutenção de parcerias. Boa oratória e foco em resultados.</p>
            <a href="#" class="btn btn-green">Candidatar-se</a>
        </div>
    </section>

    <!-- VAGA VIP -->
    <section class="vaga-vip">
        <div class="vip-texto">
            <h2><i class="fa-solid fa-crown"></i> Vaga VIP</h2>
            <p>Conteúdo exclusivo para assinantes premium. Destaque sua candidatura e tenha acesso antecipado às melhores oportunidades!</p>
            <a href="#" class="btn btn-green">Seja Premium</a>
        </div>
        <div class="vip-img">
            <img src="/vdvagas/public/imagens/logo.png" alt="Vaga VIP">
        </div>
    </section>

    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/footer.css">

</main>

</body>
</html>
