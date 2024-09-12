<?php

session_start();
if(!isset($_SESSION['userId']) || $_SESSION['userId'] == ''){
    header('Location:usuarios/login.php?msg=Você não está autenticado');

}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Locadora</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            margin: 0;
            display: flex;
            height: 100vh;
            color: #333;
        }

        .sidebar {
            background-color: #2c3e50;
            width: 250px;
            padding: 20px;
            box-shadow: 4px 0 10px rgba(0, 0, 0, 0.2);
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sidebar h2 {
            color: white;
            font-size: 24px;
            margin: 0;
            margin-bottom: 30px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            width: 100%;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #ecf0f1;
            font-size: 18px;
            display: block;
            padding: 12px;
            border-radius: 8px;
            transition: background-color 0.3s, color 0.3s;
        }

        .sidebar ul li a:hover {
            background-color: #34495e;
            color: #ecf0f1;
        }

        .main-content {
            flex: 1;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            margin: 20px;
            overflow-y: auto;
        }

        .main-content h1 {
            margin-top: 0;
            color: #2c3e50;
            font-size: 28px;
        }

        .widget {
            background-color: #f9f9f9;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .widget h3 {
            margin-top: 0;
            color: #2c3e50;
            font-size: 22px;
        }

        .widget p {
            color: #7f8c8d;
            font-size: 16px;
        }

        .widget:last-of-type {
            margin-bottom: 0;
        }
    </style>
</head>
<body>

    <?php require "menu.php";?>

    <div class="main-content">
        <h1>Bem-vindo à Dashboard da Locadora</h1>
        
        <div class="widget">
            <h3>Últimos Filmes Adicionados</h3>
            <p>Mostre aqui uma lista dos filmes recentemente adicionados...</p>
        </div>

        <div class="widget">
            <h3>Estatísticas de Locação</h3>
            <p>Dados e gráficos sobre locações e clientes...</p>
        </div>

        <div class="widget">
            <h3>Notificações</h3>
            <p>Notificações recentes sobre locações e atualizações...</p>
        </div>
    </div>

</body>
</html>
