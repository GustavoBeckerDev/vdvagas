// Centralized modal control script
document.addEventListener('DOMContentLoaded', () => {
    const overlay = document.getElementById('modalOverlay');
    const modals = document.querySelectorAll('.modal');
    const btnLogin = document.querySelector('.btn-login');
    const btnCadastro = document.querySelector('.btn-signup');

    // Função para abrir o modal com fundo opaco
    function openModal(modalId) {
        const modal = document.getElementById(modalId);
        const overlayElement = document.getElementById('modalOverlay');

        if (overlayElement) {
            overlayElement.classList.add('active');
        }

        if (modal) {
            modal.style.display = 'block';
            modal.classList.add('active');
        } else {
            console.error(`Modal com ID '${modalId}' não encontrado.`);
        }
    }

    // Função para fechar o modal e remover o fundo opaco
    function closeModal(modalId) {
        const modal = document.getElementById(modalId);
        const overlayElement = document.getElementById('modalOverlay');

        if (overlayElement) {
            overlayElement.classList.remove('active');
        }

        if (modal) {
            modal.style.display = 'none';
            modal.classList.remove('active');
        }
    }

    function closeModals() {
        modals.forEach(m => m.classList.remove('active'));
        overlay.classList.remove('active');
    }

    if (btnLogin) btnLogin.addEventListener('click', () => openModal('modalLogin'));
    if (btnCadastro) btnCadastro.addEventListener('click', () => openModal('modalLogin'));

    if (overlay) overlay.addEventListener('click', closeModals);

    document.querySelectorAll('.modal-close').forEach(btn => {
        btn.addEventListener('click', closeModals);
    });

    // Adicionando evento ao botão de fechar
    document.querySelectorAll('.modal-close').forEach(button => {
        button.addEventListener('click', () => closeModal('modalLogin'));
    });

    // Adicionando evento ao fundo opaco
    const overlayElement = document.getElementById('modalOverlay');
    if (overlayElement) {
        overlayElement.addEventListener('click', () => closeModal('modalLogin'));
    }

    // Toggle password visibility inside modals
    document.addEventListener('click', (e) => {
        if (e.target.closest('.toggle-password')) {
            const btn = e.target.closest('.toggle-password');
            const form = btn.closest('form');
            if (!form) return;
            const pwd = form.querySelector('input[type="password"], input[data-password]');
            if (!pwd) return;
            const type = pwd.getAttribute('type') === 'password' ? 'text' : 'password';
            pwd.setAttribute('type', type);
        }
    });
});
