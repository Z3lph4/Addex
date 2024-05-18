document.addEventListener('DOMContentLoaded', function() {
    const deleteButtons = document.querySelectorAll('.delete-btn');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            if (confirm('Tem certeza de que deseja excluir este cliente?')) {
                this.closest('form').submit();
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    // Abrir o modal ao clicar no botão Adicionar
    var modal = document.getElementById("addModal");
    var btn = document.getElementById("addBtn");
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
        modal.style.display = "block";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});