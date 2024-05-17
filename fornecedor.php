<?php

include 'config.php';

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addex</title>

    <link rel="icon" href="./img/logo-angular.svg">

    <link rel="stylesheet" href="css/style.css">
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

        <!-- Cards -->
        <div class="cardBox">

            <div class="card">
                <div>
                    <div class="numbers">1,504</div>
                    <div class="cardName">Pedidos</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="eye-outline"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">80</div>
                    <div class="cardName">Vendas</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="cart-outline"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">284</div>
                    <div class="cardName">Clientes</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="chatbubbles-outline"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">7,842€</div>
                    <div class="cardName">Ganhos</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="cash-outline"></ion-icon>
                </div>
            </div>

        </div>

        <div class="details">
            <!-- Order Details List -->
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Pedidos Recentes</h2>
                    <a href="pedidos.php" class="btn">Ver Tudo</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <td>Nome</td>
                            <td>Preço</td>
                            <td>Produto</td>
                            <td>Estado</td>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>Isabel Lourenço</td>
                            <td>12€</td>
                            <td>Porta-Chaves Personalizado</td>
                            <td><span class="status delivered">Entregue</span></td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- New Customers -->
            <div class="recentCustomers">
                <div class="cardHeader">
                    <h2>Clientes Recentes</h2>
                </div>
                <table>

                    <tr>
                        <td width="60px"><div class="imgBx"><img src="./img/img3.jpg" alt=""></div></td>
                        <td><h4>Isabel Lourenço<br><span>Portugal</span></h4></td>
                    </tr>

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

</body>
</html>