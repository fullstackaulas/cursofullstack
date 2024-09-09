<?php
require "conexao.php";
session_start();

$email = $_GET['email'];
$senha = $_GET['senha'];

$sql = "SELECT * FROM `usuarios` where `status` = 'ativo' and email = '$email' and senha = '$senha' ";


$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();

    echo "bem vindo " . $row["nome"];
    $id = $row["id"];
    // $sql = "UPDATE usuarios SET ultimoLogin = CURRENT_TIMESTAMP WHERE id = " . $row['id'];
    $sql = "UPDATE usuarios SET ultimoLogin = CURRENT_TIMESTAMP WHERE id = $id ";
    $_SESSION["userId"] = $id;
    $_SESSION["userName"] = $row["nome"];

    echo 'Sessão iniciada e dados armazenados.';

    $resultado = $conn->query($sql);
} else {
    echo "Usuário não encontrado :( ";
}



$conn->close();

?>