<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

$email = $_GET['email'];
$senha = $_GET['novaSenha'];
$palavraDeSeguranca = $_GET['palavraDeSeguranca'];


$host = '127.0.0.1:3308';
$user = 'root';
$password = '';
$database = 'fullstack';


$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT * FROM `usuarios` where `status` = 'ativo' and email = '$email' and palavraDeSeguranca = '$palavraDeSeguranca' limit 1";
echo $sql . '<br><br><br>';

$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
    print_r($row);
    echo '<br><br><br>';
    $id = $row["id"];
    // $sql = "UPDATE usuarios SET ultimoLogin = CURRENT_TIMESTAMP WHERE id = " . $row['id'];
    $sql = "UPDATE usuarios SET senha = '$senha' WHERE id = $id ";
    echo $sql . '<br><br><br>';

    $resultado = $conn->query($sql);
    echo "Sua senha foi atualizada :) ";
} else {
    echo "Usuário não encontrado :( ";
}

$conn->close();

?>