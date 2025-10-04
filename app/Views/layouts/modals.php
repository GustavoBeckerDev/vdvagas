<!-- Fundo de opacidade -->
<div class="modal-overlay" id="modalOverlay"></div>

<!-- Modal Login -->
<div class="modal" id="modalLogin" role="dialog" aria-labelledby="modalLoginTitle" aria-modal="true">
    <div class="modal-content">
        <button class="modal-close" aria-label="Fechar modal">&times;</button>

        <h2 id="modalLoginTitle" class="text-left">Login</h2>
        <p class="text-left">Faça login digitando seu e-mail e senha.</p>

        <form id="loginForm" novalidate>
            <div class="form-group">
                <label for="email" class="text-left">Email:</label>
                <div class="input-icon">
                    <i class="fa-solid fa-envelope input-icon-left" aria-hidden="true"></i>
                    <input type="email" id="email" name="email" placeholder="seuemail@email.com" required>
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="text-left">Senha:</label>
                <div class="input-icon">
                    <i class="fa-solid fa-lock input-icon-left" aria-hidden="true"></i>
                    <input type="password" id="password" name="password" placeholder="********" required>
                    <i class="fa-solid fa-eye input-icon-right toggle-password" role="button" aria-label="Mostrar senha"></i>
                </div>
                <a href="#" class="forgot-password">Esqueceu sua senha?</a>
            </div>

            <button type="submit" class="login-button btn-primary">Log in</button>

            
            <p class="signup-link">Não tem uma conta? <a href="#" class="open-signup">Cadastre-se</a></p>
        </form>
    </div>
</div>

<!-- Modal de Cadastro -->
<div class="modal" id="modalSignup" role="dialog" aria-labelledby="modalSignupTitle" aria-modal="true">
    <div class="modal-content">
        <button class="modal-close" aria-label="Fechar modal">&times;</button>

        <h2 id="modalSignupTitle" class="text-left">Crie sua conta</h2>
        <p class="text-left">Preencha os dados para criar sua conta.</p>

        <form id="signupForm" novalidate>
            <div class="form-group">
                <label for="signupEmail" class="text-left">Email:</label>
                <div class="input-icon">
                    <i class="fa-solid fa-envelope input-icon-left" aria-hidden="true"></i>
                    <input type="email" id="signupEmail" name="email" placeholder="seuemail@email.com" required>
                </div>
            </div>

            <div class="form-group">
                <label for="signupPassword" class="text-left">Senha:</label>
                <div class="input-icon">
                    <i class="fa-solid fa-lock input-icon-left" aria-hidden="true"></i>
                    <input type="password" id="signupPassword" name="password" placeholder="********" required>
                    <i class="fa-solid fa-eye input-icon-right toggle-password" role="button" aria-label="Mostrar senha"></i>
                </div>
            </div>

            <div class="form-group">
                <label for="signupPasswordConfirm" class="text-left">Confirmar Senha:</label>
                <div class="input-icon">
                    <i class="fa-solid fa-lock input-icon-left" aria-hidden="true"></i>
                    <input type="password" id="signupPasswordConfirm" name="password_confirm" placeholder="********" required>
                    <i class="fa-solid fa-eye input-icon-right toggle-password" role="button" aria-label="Mostrar senha"></i>
                </div>
            </div>

            <div class="signup-type">
                <label class="signup-type-item">
                    <input type="radio" name="signup_type" value="candidato"> Candidato
                </label>
                <label class="signup-type-item">
                    <input type="radio" name="signup_type" value="empresa"> Empresa
                </label>
            </div>

            <button type="submit" class="login-button btn-primary">Criar Conta</button>

            <p class="signup-link">Já tem uma conta? <a href="#" class="open-login">Faça login</a></p>
        </form>
    </div>
</div>
