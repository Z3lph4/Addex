document.addEventListener("DOMContentLoaded", function() {
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("addClientBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    // Adicionar função de envio do formulário
    document.getElementById("addForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Evita que o formulário seja enviado por padrão
        // Aqui você pode adicionar a lógica para enviar os dados do formulário via AJAX ou realizar outras ações
        // Por exemplo, você pode usar fetch() para enviar os dados para o servidor
        // Consulte a documentação do fetch() para mais informações: https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API/Using_Fetch
        var nome = document.getElementById("nome").value;
        var nif = document.getElementById("nif").value;
        // Lógica para enviar os dados para o servidor
        console.log("Nome: " + nome + ", NIF: " + nif);
        // Fechar o modal após o envio dos dados
        modal.style.display = "none";
    });
});
