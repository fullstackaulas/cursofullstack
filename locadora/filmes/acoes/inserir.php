<?php

require "../../conexao.php";

session_start();

$titulo = $_GET['titulo'];
$genero = $_GET['genero'];
$dataDeLancamento = $_GET['dataDeLancamento'];
$classificacao = $_GET['classificacao'];
$diretor = $_GET['diretor'];
$descricao = $_GET['descricao'];
$createdBy = $_SESSION['userId'];

$sql = "INSERT INTO filmes (titulo, genero, dataDeLancamento, classificacao, diretor, descricao, created_by ) VALUES('$titulo', '$genero', '$dataDeLancamento', $classificacao, '$diretor', '$descricao', $createdBy )";


if ($conn->query($sql) === TRUE) {
    $conn->close();
    header('Location:../criar.php?msg=filme '. $titulo .' cadastrado :)');
} else {
    echo $titulo . "nao foi inserido com sucesso :( ";

}

$conn->close();

?>