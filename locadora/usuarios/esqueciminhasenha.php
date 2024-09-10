<?php
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
    <title>Esqueci Minha Senha</title>
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

        .forgot-password-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .forgot-password-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .forgot-password-container input[type="email"],
        .forgot-password-container input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .forgot-password-container button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            background-color: #7b4fb2;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .forgot-password-container button:hover {
            background-color: #6b429e;
        }

        .forgot-password-container .link {
            display: block;
            margin: 10px 0;
            color: #6e8efb;
            text-decoration: none;
            font-size: 14px;
        }

        .forgot-password-container .link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="forgot-password-container">
    <h2><?php echo $msg;?></h2>
    <h2>Esqueci Minha Senha</h2>
    <form action="acoes/atualizarSenha.php" method="Get">
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="palavraDeSeguranca" placeholder="Palavra de Segurança" required>
        <input type="text" name="novaSenha" placeholder="Nova senha" required>
        <button type="submit">Recuperar Senha</button>
        <a href="login.php" class="link">Voltar ao Login</a>
    </form>
</div>

</body>
</html>

