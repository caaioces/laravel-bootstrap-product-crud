@if ($errors->any())
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('modal');

        // Função para mostrar o modal
        function showModal() {
        // Mostrar o modal
        modal.classList.add('show');
        modal.style.display = 'block';
        document.body.classList.add('modal-open'); // Para adicionar o scroll
        modal.setAttribute('aria-hidden', 'false');

        // Criar o backdrop
        const backdrop = document.createElement('div');
        backdrop.className = 'modal-backdrop fade show';
        document.body.appendChild(backdrop);
        }

        // Mostrar o modal ao carregar a página
        showModal();

        // Fechar o modal ao clicar no botão de fechar
        const closeModalButtons = document.querySelectorAll('[data-bs-dismiss="modal"]');
        closeModalButtons.forEach(button => {
        button.addEventListener('click', function () {
        modal.classList.remove('show');
        modal.style.display = 'none';
        document.body.classList.remove('modal-open');

        // Remover o backdrop
        const backdrop = document.querySelector('.modal-backdrop');
        if (backdrop) {
            backdrop.remove();
        }

        modal.setAttribute('aria-hidden', 'true');
        });
        });
    });
</script>
@endif