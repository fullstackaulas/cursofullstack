<?php
ini_set('error_reporting', E_ALL); // mesmo resultado de: error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_GET['nome'])) {


    $nome = $_GET['nome'];
    $precoEmReais = $_GET['precoEmReais'];

    $resultado = '';
    $desconto = 0;
    $porcentagem = 1;


    if ($precoEmReais < 100) {
        $porcentagem = 0.2;
    } else if ($precoEmReais >= 100 && $precoEmReais <= 500) {
        $porcentagem = 0.1;
    } else {
        $porcentagem = 0.05;
    }

    $desconto = $porcentagem * $precoEmReais;


    $precoFinal = $precoEmReais - $desconto;

    $resultado = 'O produto ' . $nome . ' custa R$' . $precoEmReais . ' com desconto de ' . $porcentagem * 100 . '% (R$' . $desconto . ') ele saira por: R$' . $precoFinal;



    echo $resultado;
}

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
        <form method="GET" action="index.php">
            <label for="nome">Nome do produto:</label>
            <input type="text" id="nome" name="nome">

            <label for="precoEmReais">Preço em reais:</label>
            <input type="number" id="precoEmReais" name="precoEmReais">

            <div class="resultado" id="mensagemDeResultado"></div>
            <div class="erro" id="mensagemDeErro"></div>


            <input type="submit" value="Calcular">
        </form>

    </main>

</body>

</html>

<script>

    calcular = function () {

        return;
        // Se o produto custar menos de 100 reais, desconto de 20%
        // Se custar mais de 100 até 500: 10%
        // Acima de 500 5%


        const nome = document.getElementById('nome').value;
        const precoEmReais = parseFloat(document.getElementById('precoEmReais').value);

        let resultado = '';
        let desconto = 0;
        let porcentagem = 1;
        let erro = '';

        if (precoEmReais < 100) {
            porcentagem = 0.2
        }
        else if (precoEmReais >= 100 && precoEmReais <= 500) {
            porcentagem = 0.1
        }
        else {
            porcentagem = 0.05
        }

        desconto = porcentagem * precoEmReais;


        let precoFinal = precoEmReais - desconto;

        resultado = 'O produto ' + nome + ' custa R$' + precoEmReais + ' com desconto de ' + porcentagem * 100 + '% (R$' + desconto + ') ele sairá por: R$' + precoFinal;




        let mensagemDeResultado = document.getElementById('mensagemDeResultado').textContent = resultado;
        let mensagemDeErro = document.getElementById('mensagemDeErro').textContent = erro;


    }





</script>