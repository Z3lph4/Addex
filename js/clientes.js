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