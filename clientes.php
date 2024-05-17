<?php
// Incluir o arquivo de configuração do banco de dados
include 'config.php';

// Iniciar a sessão (se necessário)
session_start();

// Consulta SQL para selecionar todos os dados da tabela clientes
$sql = "SELECT nome_cliente, nif, email, morada FROM clientes";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addex</title>

    <link rel="stylesheet" href="css/clientes.css">
</head>

<body>

<div class="container">
        <div class="navigation">
          <ul>

            <li>
                <a href="index.php">
                    <span class="icon"><ion-icon name="logo-angular"></ion-icon></span>
                    <span class="title">Addex</span>
                </a>
            </li>

            <li>
                <a href="index.php">
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="title">DashBoard</span>
                </a>
            </li>
            <li>
                <a href="clientes.php">
                    <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                    <span class="title">Clientes</span>
                </a>
            </li>
            <li>
                <a href="pedidos.php">
                    <span class="icon"><ion-icon name="basket-outline"></ion-icon></span>
                    <span class="title">Pedidos</span>
                </a>
            </li>
            <li>
                <a href="materiais.php">
                    <span class="icon"><ion-icon name="hammer-outline"></ion-icon></span>
                    <span class="title">Materiais</span>
                </a>
            </li>
            <li>
                <a href="fornecedor.php">
                    <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                    <span class="title">Fornecedor</span>
                </a>
            </li>
            <li>
                <a href="planeamento.php">
                    <span class="icon"><ion-icon name="easel-outline"></ion-icon></span>
                    <span class="title">Planeamento</span>
                </a>
            </li>

          </ul>  
        </div>

        <!-- //// MAIN \\\\ -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <!-- Seach -->
                <div class="search">
                    <label for="">
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                <!-- UserImg -->
                <!-- <div class="user">
                    <img src="./img/user.jpg" alt="">
                </div> -->
            </div>

        <div class="details">
            <!-- Order Details List -->
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Clientes</h2>
                    <!-- <a href="#" class="btn">View All</a> -->
                    <!-- Adicionar, Eliminar e Editar Botões -->
                    <div class="actions">
                        <a href="#" class="btn">Adicionar</a>
                        <a href="#" class="btn">Eliminar</a>
                        <a href="#" class="btn">Editar</a>
                    </div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <td>Nome</td>
                            <td>NIF</td>
                            <td>Email</td>
                            <td>Morada</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Verificar se há dados retornados pela consulta
                        if (mysqli_num_rows($result) > 0) {
                            // Loop através dos dados retornados e exibir em linhas da tabela
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>';
                                echo '<td>' . $row['nome_cliente'] . '</td>';
                                echo '<td>' . $row['nif'] . '</td>';
                                echo '<td>' . $row['email'] . '</td>';
                                echo '<td>' . $row['morada'] . '</td>';
                                echo '</tr>';
                            }
                        } else {
                            // Se não houver dados na tabela clientes, exibir uma mensagem
                            echo '<tr><td colspan="4">Nenhum cliente encontrado.</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        </div>
    </div>

    <!-- //// ICONS - IonIcons \\\\ -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- //// JavaScript \\\\ -->
    <script src="js/main.js"></script>
    <script src="js/clientes.js"></script>

</body>
</html>

<?php
// Fechar a conexão com o banco de dados
mysqli_close($conn);
?>