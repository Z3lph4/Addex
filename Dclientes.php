<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_cliente = $_POST['id_cliente'];

    // Prepara a consulta SQL para excluir o cliente
    $sql = "DELETE FROM clientes WHERE id_cliente = ?";
    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "i", $id_cliente);

        if (mysqli_stmt_execute($stmt)) {
            // Redireciona de volta para a página de clientes após a exclusão
            header("Location: clientes.php");
            exit();
        } else {
            echo "Erro ao excluir o registro: " . mysqli_error($conn);
        }
    } else {
        echo "Erro ao preparar a consulta: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>
