<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<main class="vagas">

    <!-- CSS -->
    <link rel="stylesheet" href="/vdvagas/public/assets/vagas.css">

    <!-- HERO -->
    <section class="vagas-hero">
        <div class="vagas-hero-text">
            <h1>Encontre a vaga perfeita para você</h1>
            <p>Busque por oportunidades filtrando por localidade, área de interesse e tipo de contrato.</p>
        </div>
    </section>

    <!-- FILTROS -->
    <section class="vagas-filtros">
        <div class="barra-pesquisa">
            <input type="text" placeholder="Pesquisar...">
        </div>
        <div class="filtros">
            <select>
                <option>Localização</option>
            </select>
            <select>
                <option>Faixa salarial</option>
            </select>
            <select>
                <option>Tipo de vaga</option>
            </select>
        </div>
    </section>

    <!-- CONTAINER PRINCIPAL -->
    <div id="vagas-container">
        <?php
        // 🔹 MOCK DE VAGAS (futuro: buscar do banco)
        /* $stmt = $pdo->query("SELECT titulo, descricao FROM vagas ORDER BY created_at DESC");
$vagas = $stmt->fetchAll(PDO::FETCH_ASSOC); */

        $vagas = [];
        for ($i = 1; $i <= 50; $i++) {
            $vagas[] = [
                'titulo' => "Vaga Exemplo $i",
                'descricao' => "Descrição resumida da vaga número $i. Inclua aqui os principais requisitos."
            ];
        }

        // 🔹 Primeira carga: 9 vagas + 1 VIP
        $primeiroBloco = array_slice($vagas, 0, 9);
        echo '<section class="vagas-grid">';
        foreach ($primeiroBloco as $vaga) {
            echo '<div class="vaga-card">';
            echo '<div class="vaga-icone">🔒</div>';
            echo '<h3>' . $vaga['titulo'] . '</h3>';
            echo '<p>' . $vaga['descricao'] . '</p>';
            echo '</div>';
        }
        echo '</section>';

        echo '
        <section class="vaga-vip">
            <div class="vip-texto">
                <h2>Vaga VIP</h2>
                <p>Conteúdo exclusivo para assinantes premium.</p>
            </div>
            <div class="vip-img">
                <img src="/vdvagas/public/imagens/vip.png" alt="Vaga VIP">
            </div>
        </section>
        ';
        ?>
    </div>

    <!-- LOADER -->
    <div id="loader" class="loader" style="display: none;">Carregando mais vagas...</div>

    <link rel="stylesheet" href="/vdvagas/public/assets/footer.css">

    <!-- SCRIPT PARA SCROLL INFINITO -->
    <script>
        const vagas = <?php echo json_encode($vagas); ?>; // mock / futuro banco
        let offset = 9; // já mostramos 9
        const container = document.getElementById('vagas-container');
        const loader = document.getElementById('loader');
        let loading = false;

        function loadMore() {
            if (loading) return;
            loading = true;
            loader.style.display = "block";

            setTimeout(() => { // simula carregamento assíncrono
                const nextVagas = vagas.slice(offset, offset + 9);
                if (nextVagas.length === 0) {
                    loader.innerText = "Não há mais vagas.";
                    return;
                }

                // adiciona 9 vagas
                const grid = document.createElement('section');
                grid.classList.add('vagas-grid');
                nextVagas.forEach(vaga => {
                    const card = document.createElement('div');
                    card.classList.add('vaga-card');
                    card.innerHTML = `
                        <div class="vaga-icone">🔒</div>
                        <h3>${vaga.titulo}</h3>
                        <p>${vaga.descricao}</p>
                    `;
                    grid.appendChild(card);
                });
                container.appendChild(grid);

                // adiciona 1 vaga VIP
                const vip = document.createElement('section');
                vip.classList.add('vaga-vip');
                vip.innerHTML = `
                    <div class="vip-texto">
                        <h2>Vaga VIP</h2>
                        <p>Conteúdo exclusivo para assinantes premium.</p>
                    </div>
                    <div class="vip-img">
                        <img src="/vdvagas/public/imagens/vip.png" alt="Vaga VIP">
                    </div>
                `;
                container.appendChild(vip);

                offset += 9;
                loader.style.display = "none";
                loading = false;
            }, 800); // delay para simular carregamento
        }

        // Scroll infinito
        window.addEventListener('scroll', () => {
            if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 200) {
                loadMore();
            }
        });
    </script>

</main>