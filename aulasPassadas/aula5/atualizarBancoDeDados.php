<?php
ini_set('error_reporting', E_ALL); // mesmo resultado de: error_reporting(E_ALL);
ini_set('display_errors', 1);


$host = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'fullStack';


// Cria uma conexão
$conn = new mysqli($host, $user, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


$id = (int)$_GET['id'];
$nome = $_GET['nome'];
$precoEmReais = $_GET['precoEmReais'];


$sql = "UPDATE caixaRegistradora SET nome = '$nome', preco = $precoEmReais where id = $id";

if($conn->query($sql) === TRUE){
    echo $nome . " foi atualizado com sucesso";
}
else{
    echo $nome . " nao foi atualizado com sucesso";

}
// Fechar conexão
$conn->close();



?>