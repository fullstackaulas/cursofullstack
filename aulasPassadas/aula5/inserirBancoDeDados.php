<?php
ini_set('error_reporting', E_ALL); // mesmo resultado de: error_reporting(E_ALL);
ini_set('display_errors', 1);

// print_r($_GET);

//Array ( [nome] => kiwi [precoEmReais] => 10 )


$nome = $_GET['nome'];
$precoEmReais = $_GET['precoEmReais'];

// echo "chegou";


$host = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'fullStack';
// echo "chegou2";


// Cria uma conexão
$conn = new mysqli($host, $user, $password, $database);

// echo "chegou3";


// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
// echo "chegou4";

// Fechar conexão


// errada! $sql = "INSERT INTO caixaRegistradora('nome', 'valor') VALUES('$nome', $precoEmReais);";
$sql = "INSERT INTO caixaRegistradora(nome, preco) VALUES('$nome', $precoEmReais)";


// echo $sql;

if($conn->query($sql) === TRUE){
    echo $nome . " foi inserido com sucesso";
}
else{
    echo $nome . " nao foi inserido com sucesso";

}

$conn->close();
// echo "chegou5";





?>