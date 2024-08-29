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

// Fechar conexão


$sql = "SELECT * FROM `caixaRegistradora`";

// $sqlInsert = "insert into caixaRegistradora('nome', 'valor') VALUES('Caio', 1000)";

$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        echo $row['id'] . " - " . $row["nome"] . " - " . $row["preco"] . ' - ' . $row['dataDeCriacao'] . "<br>";
    }
}

$conn->close();



ECHO "VOLTAMOS 20:50"!!!



?>