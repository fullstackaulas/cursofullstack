<?php

session_start();
if(isset($_SESSION['userId']) && $_SESSION['userId'] != ''){
    header('Location:../dashboard.php');
}
$msg = '';
if(isset($_GET['msg'])){
$msg = $_GET['msg'];
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .login-container button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            background-color: #6e8efb;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-container button:hover {
            background-color: #5a7bdb;
        }

        .login-container .link {
            display: block;
            margin: 10px 0;
            color: #6e8efb;
            text-decoration: none;
            font-size: 14px;
        }

        .login-container .link:hover {
            text-decoration: underline;
        }

        .login-container .register-btn {
            background-color: #7b4fb2; /* Cor ajustada para maior contraste */
            color: white; /* Cor do texto ajustada para melhor legibilidade */
            padding: 10px;
            margin-top: 10px;
            display: inline-block;
            border-radius: 5px;
            transition: background-color 0.3s;
            text-decoration: none;
            font-size: 16px;
        }

        .login-container .register-btn:hover {
            background-color: #6b429e; /* Efeito de hover para o botão */
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2><?php echo $msg;?></h2>
    <h2>Login</h2>
    <form action="acoes/logar.php" method="GET">
        <input type="text" name="email" placeholder="Usuário" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit">Logar</button>
        <a href="esqueciminhasenha.php" class="link">Esqueci minha senha</a>
        <a href="cadastro.php" class="register-btn">Cadastre-se</a>
    </form>
</div>

</body>
</html>