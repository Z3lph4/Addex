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

        <div class="details">
            <!-- Order Details List -->
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Recent Orders</h2>
                    <!-- <a href="#" class="btn">View All</a> -->
                </div>
                <table>
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Price</td>
                            <td>Payment</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>Star Refrigerator</td>
                            <td>1200€</td>
                            <td>Paid</td>
                            <td><span class="status delivered">Delivered</span></td>
                        </tr>

                        <tr>
                            <td>Star Refrigerator</td>
                            <td>1200€</td>
                            <td>Paid</td>
                            <td><span class="status return">Return</span></td>
                        </tr>

                        <tr>
                            <td>Star Refrigerator</td>
                            <td>1200€</td>
                            <td>Due</td>
                            <td><span class="status inprogress">In Progress</span></td>
                        </tr>

                        <tr>
                            <td>Star Refrigerator</td>
                            <td>1200€</td>
                            <td>Due</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>

                        <tr>
                            <td>Star Refrigerator</td>
                            <td>1200€</td>
                            <td>Paid</td>
                            <td><span class="status delivered">Delivered</span></td>
                        </tr>

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

</body>
</html>