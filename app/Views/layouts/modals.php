<!-- Modal Login -->
<div class="modal" id="modalLogin">
    <div class="modal-content">
        <button class="modal-close">&times;</button>
        <!-- Conteúdo do modal de login -->
        <h2 class="text-left">Login</h2>
        <p class="text-left">Faça login digitando seu e-mail e senha.</p>
        <form id="loginForm">
            <div class="form-group">
                <label for="email" class="text-left">Email:</label>
                <div class="input-icon">
                    <input type="email" id="email" name="email" placeholder="seuemail@email.com" required>
                </div>
            </div>

            <div class="form-group">
                <label for="password">Senha:</label>
                <div class="input-icon">
                    <input type="password" id="password" name="password" placeholder="********" required>
                </div>
                <a href="#" class="forgot-password">Esqueceu sua senha?</a>
            </div>

            <button type="submit" class="login-button">Log in</button>

            <div class="remember-me">
                <input type="checkbox" id="rememberMe" name="rememberMe">
                <label for="rememberMe">Lembrar-me</label>
            </div>

            <p class="signup-link">Não tem uma conta? <a href="#">Cadastre-se</a></p>
        </form>
    </div>
</div>
<!-- CSS/JS assets for modals are included in the header to avoid duplicates -->
