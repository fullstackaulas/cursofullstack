<?php
ini_set('error_reporting', E_ALL); // mesmo resultado de: error_reporting(E_ALL);
ini_set('display_errors', 1);

$id = $_GET['id'];

$host = '127.0.0.1'; // ou localhost
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

$contadorSql = "select count(*) as total from caixaRegistradora where id = $id";

$resultado = $conn->query($contadorSql);

$row = $resultado->fetch_assoc();


if ($row['total'] == 0) {
    echo $id . " nao existe!";

} else {
    $sql = "DELETE FROM caixaRegistradora where id = $id";


    if ($conn->query($sql) === TRUE) {
        echo $id . " foi deletado com sucesso";
    } else {
        echo $id . " nao foi deletado com sucesso";

    }
}

$conn->close();





?>