<?php
// Incluir o arquivo de configuração do banco de dados
include 'config.php';

session_start();

// Consulta SQL para selecionar todos os dados da tabela clientes
$sql = "SELECT id_cliente, nome_cliente, nif, email, morada FROM clientes";
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
        </div>

        <div class="details">
            <!-- Order Details List -->
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Clientes</h2>
                    <div class="actions">
                        <button id="addBtn" class="btn">Adicionar</button>
                    </div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <td>Nome</td>
                            <td>NIF</td>
                            <td>Email</td>
                            <td>Morada</td>
                            <td>Ações</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>';
                                echo '<td>' . $row['nome_cliente'] . '</td>';
                                echo '<td>' . $row['nif'] . '</td>';
                                echo '<td>' . $row['email'] . '</td>';
                                echo '<td>' . $row['morada'] . '</td>';
                                echo '<td>';
                                echo '<form method="post" action="Dclientes.php" class="delete-form" style="display:inline;">';
                                echo '<input type="hidden" name="id_cliente" value="' . $row['id_cliente'] . '">';
                                echo '<button type="submit" class="delete-btn" style="background-color:red;color:white;border:none;padding:5px;">X</button>';
                                echo '</form>';
                                echo '<button class="edit-btn" style="padding-left: 15px; background-color: yellow; border: none;"><ion-icon name="create-outline"></ion-icon></button>';
                                echo '</td>';
                                echo '</tr>';
                            }                            
                        } else {
                            echo '<tr><td colspan="5">Nenhum cliente encontrado.</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Popup Modal -->
<div id="addModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <form id="addForm" method="post" action="Aclientes.php">
            <div class="form-group">
                <label for="nome_cliente">Nome</label>
                <input type="text" id="nome_cliente" name="nome_cliente" required>
            </div>
            <div class="form-group">
                <label for="nif">NIF</label>
                <input type="text" id="nif" name="nif" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="morada">Morada</label>
                <input type="text" id="morada" name="morada" required>
            </div>
            <div class="form-group">
                <button type="submit">Adicionar</button>
            </div>
        </form>
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
mysqli_close($conn);
?>