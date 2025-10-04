<main class="modalLogin">
    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/modalLogin.css">

    <dialog id='dialogLog'>
    <article>
        <form action="#">
            <fildset>
                <div class="header">
                    <div class="fechar">
                        <button class="btn fechar"><p>X</p></button>
                    </div>
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
                <div class="login">
                    <input type="submit" value="Log-in" class="button confirm">
                    <label>
                        <input type="checkbox" checked>
                        <span class="checkmark"></span>
                    </label>
                    <br>
                </div>
                <div class="cadastrar">
                    <p>Não tem uma conta? <button class="btn-cadLog">Cadastre-se</button></p>
                </div>
            </fildset>
        </form>
    </article>
    </dialog>
</main>
