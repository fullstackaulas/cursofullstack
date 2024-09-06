<?php
ini_set('error_reporting', E_ALL); 
ini_set('display_errors', 1);

$nome = $_GET['nome'];
$email = $_GET['email'];
$senha = $_GET['senha'];
$palavraDeSeguranca = $_GET['palavraDeSeguranca'];

$host = '127.0.0.1:3308';
$user = 'root';
$password = '';
$database = 'fullstack';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}



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