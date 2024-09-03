<?php
ini_set('error_reporting', E_ALL); 
ini_set('display_errors', 1);

$nome = $_GET['nome'];
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

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES('$nome', '$email', '$senha')";

if($conn->query($sql) === TRUE){
    echo $nome . " Usuario inserido com sucesso";
}
else{
    echo $nome . " Usuario nao foi inserido com sucesso :( ";

}

$conn->close();


?>