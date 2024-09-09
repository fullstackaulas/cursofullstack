<?php
require "conexao.php";

$nome = $_GET['nome'];
$email = $_GET['email'];
$senha = $_GET['senha'];
$palavraDeSeguranca = $_GET['palavraDeSeguranca'];


$sql = "SELECT * FROM `usuarios` where `status` = 'ativo' and email = '$email' limit 1";
// echo $sql . '<br><br><br>';

$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
//  echo 'Email já cadastrado';
header('Location:../esqueciminhasenha.php?msg=Podemos%20ajudar?');

} else {

    $sql = "INSERT INTO usuarios (nome, email, senha, palavraDeSeguranca) VALUES('$nome', '$email', '$senha', '$palavraDeSeguranca')";





    if($conn->query($sql) === TRUE){
        echo $nome . " Usuario inserido com sucesso";
    }
    else{
        echo $nome . " Usuario nao foi inserido com sucesso :( ";

    }

}

$conn->close();


?>