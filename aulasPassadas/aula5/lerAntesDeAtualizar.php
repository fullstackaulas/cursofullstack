<?php

ini_set('error_reporting', E_ALL); // mesmo resultado de: error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'fullStack';

$id = $_GET['id'];

// Cria uma conexão
$conn = new mysqli($host, $user, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Fechar conexão


$sql = "SELECT * FROM `caixaRegistradora` where id = $id";

// $sqlInsert = "insert into caixaRegistradora('nome', 'valor') VALUES('Caio', 1000)";

$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc(); // Obtem apenas uma linha
}
$conn->close();

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa registradora</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #4CAF50;
            color: white;
            padding: 1em;
            text-align: center;
        }

        main {
            padding: 1em;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 1em;
            margin-bottom: 0.5em;
            color: #333;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"] {
            padding: 0.75em;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 1em;
            font-size: 1em;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="button"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 0.75em;
            border-radius: 4px;
            font-size: 1.1em;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="button"]:hover {
            background-color: #45a049;
        }


        .erro {
            color: red;
            padding-bottom: 50px;
            font-size: 30px;
        }
    </style>
</head>

<body>
    <main>
    <label for="nome">Editando o produto: #<?php echo $row['id']?></label>

        <form method="GET" action="atualizarBancoDeDados.php">
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
            <label for="nome">Nome do produto:</label>
            <input type="text" id="nome" name="nome" value="<?php echo $row['nome']?>">

            <label for="precoEmReais">Preço em reais:</label>
            <input type="number" id="precoEmReais" name="precoEmReais" value="<?php echo $row['preco']?>">

            <div class="resultado" id="mensagemDeResultado"></div>
            <div class="erro" id="mensagemDeErro"></div>


            <input type="submit" value="Atualizar">
        </form>

    </main>

</body>

</html>
