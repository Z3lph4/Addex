<?php

include 'config.php';

session_start();

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Painel Administrativo</title>
    <link rel="stylesheet" href="./css/style.css">  
</head>
<body>
    <div class="container">
        <!-- Cabeçalho -->
        <header class="header">
            <h1>Painel Administrativo</h1>
            <nav>
                <ul>
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Clientes</a></li>
                    <li><a href="#">Matérias-Primas</a></li>
                    <li><a href="#">Materiais Finais</a></li>
                    <li><a href="#">Encomendas</a></li>
                </ul>
            </nav>
        </header>

        <!-- Barra Lateral -->
        <aside class="sidebar">
            <ul>
                <li><a href="#">Visão Geral</a></li>
                <li><a href="#">Clientes</a></li>
                <li><a href="#">Matérias-Primas</a></li>
                <li><a href="#">Materiais Finais</a></li>
                <li><a href="#">Encomendas</a></li>
            </ul>
        </aside>

        <!-- Conteúdo Principal -->
        <main class="main-content">
            <h2>Visão Geral</h2>
            <!-- Aqui você pode adicionar gráficos, tabelas e outras informações -->
            <p>Bem-vindo ao Painel Administrativo!</p>
            <div id="estatisticas">
                <!-- Adicione estatísticas ou gráficos aqui -->
            </div>
        </main>

        <!-- Rodapé -->
        <footer class="footer">
            <p>&copy; 2024 Sua Empresa. Todos os direitos reservados.</p>
        </footer>
    </div>

    <!-- Link para o arquivo JavaScript -->
    <script src="scripts.js"></script>
</body>
</html>
