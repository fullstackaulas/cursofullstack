<?php
require "../../conexao.php";


$email = $_GET['email'];
$senha = $_GET['novaSenha'];
$palavraDeSeguranca = $_GET['palavraDeSeguranca'];

$sql = "SELECT * FROM `usuarios` where `status` = 'ativo' and email = '$email' and palavraDeSeguranca = '$palavraDeSeguranca' limit 1";
// echo $sql . '<br><br><br>';

$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
    // print_r($row);
    // echo '<br><br><br>';
    $id = $row["id"];
    // $sql = "UPDATE usuarios SET ultimoLogin = CURRENT_TIMESTAMP WHERE id = " . $row['id'];
    $sql = "UPDATE usuarios SET senha = '$senha' WHERE id = $id ";
    // echo $sql . '<br><br><br>';

    $resultado = $conn->query($sql);
    header('Location:../login.php?msg=Sua senha foi atualizada! Faça login abaixo!');
} else {
    echo "Usuário não encontrado :( ";
}

$conn->close();

?>