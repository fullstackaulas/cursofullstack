<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

$email = $_GET['email'];
$senha = $_GET['senha'];

$host = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'fullstack';


$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT * FROM `usuarios` where `status` = 'ativo' and email = '$email' and senha = '$senha' ";


$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();

    echo "bem vindo " . $row["nome"];
    $id = $row["id"];
    // $sql = "UPDATE usuarios SET ultimoLogin = CURRENT_TIMESTAMP WHERE id = " . $row['id'];
    $sql = "UPDATE usuarios SET ultimoLogin = CURRENT_TIMESTAMP WHERE id = $id ";

    $resultado = $conn->query($sql);
} else {
    echo "Usuário não encontrado :( ";
}

$conn->close();

?>