<main>
    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/modal.css">

    <dialog id='dialogLog'>
    <article>
        <form action="#">
            <fildset>
                <div class="header">
                    <legend class="titulo">Fazer Login</legend>
                    <p class="conteudo">Faça login digitando seu e-mail e senha.</p>
                </div>
                <div class="email">
                    <label>
                        Email:
                        <input type="text" placeholder="seuemail@email.com">
                    </label>
            
                </div>
                <div class="senha">
                    <label>
                        Senha:
                        <input type="password" placeholder="Digite sua senha">
                    </label>
                </div>
                <div class="footer">
                    <input type="submit" value="Log-in" class="button confirm">
                </div>
            </fildset>
        </form>
    </article>
    </dialog>
</main>
