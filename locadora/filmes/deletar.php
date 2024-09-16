<?php

require "../conexao.php";

if(!isset($_GET['id'])) {
    header('Location:listar.php');
}
$id = $_GET['id'];


$sql = "SELECT * FROM `filmes` where id = $id";

$resultado = $conn->query($sql);

$row = $resultado->fetch_assoc();

$conn->close();

?>

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
            background-color: #e74c3c;
            /* Vermelho para confirmar a exclusão */
        }

        .form-group .confirm:hover {
            background-color: #c0392b;
        }

        .form-group .cancel {
            background-color: #3498db;
            /* Azul para cancelar */
        }

        .form-group .cancel:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>

    <?php require "../menu.php"; ?>

    <div class="main-content">
        <h1>Excluir Filme #<?php echo $row['id']?></h1>
        <div class="item-details">
            <p><strong>Título:</strong> <?php echo $row['titulo']?></p>
            <p><strong>Gênero:</strong> <?php echo $row['genero']?></p>
            <p><strong>Data de Lançamento:</strong> <?php echo $row['dataDeLancamento']?></p>
            <p><strong>Diretor:</strong> <?php echo $row['diretor']?></p>
            <p><strong>Classificação:</strong> <?php echo $row['classificacao']?></p>
            <p><strong>Descrição:</strong> <?php echo $row['descricao']?></p>
        </div>

        <div class="form-group">
            <form action="acoes/deletarAcao.php" method="GET">
                <input type="hidden" value="<?php echo $row['id']?>" name="id">
                <button type="submit" class="confirm">Excluir</button>
                <a href="listar.php" class="cancel">Cancelar</a>
            </form>
        </div>
    </div>

</body>

</html>