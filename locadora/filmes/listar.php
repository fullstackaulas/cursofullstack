<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Filmes - Locadora</title>
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #2c3e50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
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
        <h1>Listar Filmes</h1>
        
        <table>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Gênero</th>
                    <th>Data de Lançamento</th>
                    <th>Diretor</th>
                    <th>Classificação</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Filme Exemplo 1</td>
                    <td>Ação</td>
                    <td>2024-05-15</td>
                    <td>Diretor Exemplo</td>
                    <td>PG-13</td>
                    <td>
                        <a href="#">Editar</a> | 
                        <a href="#" style="color: red;">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td>Filme Exemplo 2</td>
                    <td>Comédia</td>
                    <td>2024-06-10</td>
                    <td>Diretor Exemplo 2</td>
                    <td>R</td>
                    <td>
                        <a href="#">Editar</a> | 
                        <a href="#" style="color: red;">Excluir</a>
                    </td>
                </tr>
                <!-- Adicione mais linhas conforme necessário -->
            </tbody>
        </table>
    </div>

</body>
</html>
