<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Filme - Locadora</title>
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
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .main-content h1 {
            margin-top: 0;
            color: #2c3e50;
            font-size: 28px;
        }

        .item-details {
            margin-bottom: 20px;
            text-align: center;
        }

        .item-details p {
            margin: 10px 0;
            font-size: 18px;
        }

        .form-group {
            margin-top: 20px;
            text-align: center;
        }

        .form-group button,
        .form-group a {
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin: 0 10px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s;
        }

        .form-group .confirm {
            background-color: #e74c3c; /* Vermelho para confirmar a exclusão */
        }

        .form-group .confirm:hover {
            background-color: #c0392b;
        }

        .form-group .cancel {
            background-color: #3498db; /* Azul para cancelar */
        }

        .form-group .cancel:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h2>Locadora</h2>
        <ul>
            <li><a href="#">Adicionar Filme</a></li>
            <li><a href="#">Listar Filmes</a></li>
            <li><a href="#">Atualizar Filme</a></li>
            <li><a href="#">Remover Filme</a></li>
            <li><a href="#">Adicionar Cliente</a></li>
            <li><a href="#">Listar Clientes</a></li>
            <li><a href="#">Atualizar Cliente</a></li>
            <li><a href="#">Remover Cliente</a></li>
        </ul>
    </div>

    <div class="main-content">
        <h1>Excluir Filme</h1>
        
        <div class="item-details">
            <p><strong>Título:</strong> Filme Exemplo</p>
            <p><strong>Gênero:</strong> Ação</p>
            <p><strong>Data de Lançamento:</strong> 2024-05-15</p>
            <p><strong>Diretor:</strong> Diretor Exemplo</p>
            <p><strong>Classificação:</strong> PG-13</p>
            <p><strong>Descrição:</strong> Descrição do filme exemplo...</p>
        </div>
        
        <div class="form-group">
            <form action="#" method="post">
                <button type="submit" class="confirm">Excluir</button>
                <a href="#" class="cancel">Cancelar</a>
            </form>
        </div>
    </div>

</body>
</html>
