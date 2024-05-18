<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_cliente = $_POST['nome_cliente'];
    $nif = $_POST['nif'];
    $email = $_POST['email'];
    $morada = $_POST['morada'];

    // Prepara a consulta SQL para inserir o cliente
    $sql = "INSERT INTO clientes (nome_cliente, nif, email, morada) VALUES (?, ?, ?, ?)";
    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "ssss", $nome_cliente, $nif, $email, $morada);

        if (mysqli_stmt_execute($stmt)) {
            // Redireciona de volta para a página de clientes após a inserção
            header("Location: clientes.php");
            exit();
        } else {
            echo "Erro ao inserir o registro: " . mysqli_error($conn);
        }
    } else {
        echo "Erro ao preparar a consulta: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>
