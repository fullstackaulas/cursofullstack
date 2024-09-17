<?php

require "../../conexao.php";

session_start();

$titulo = $_GET['titulo'];
$genero = $_GET['genero'];
$dataDeLancamento = $_GET['dataDeLancamento'];
$classificacao = $_GET['classificacao'];
$diretor = $_GET['diretor'];
$descricao = $_GET['descricao'];
$usuarioLogado = $_SESSION['userId'];

$id = $_GET['id'];


$sql = "UPDATE `filmes` SET `titulo`='$titulo',`genero`='$genero',`dataDeLancamento`='$dataDeLancamento',`classificacao`='$classificacao',
`diretor`='$diretor',`descricao`='$descricao',`updated_at`= CURRENT_TIMESTAMP,`updated_by`= $usuarioLogado WHERE id = $id";

echo $sql;


if ($conn->query($sql) === TRUE) {
    $conn->close();
    header('Location:../criar.php?msg=filme '. $titulo .' cadastrado :)');
} else {
    echo $titulo . "nao foi inserido com sucesso :( ";

}

$conn->close();

?>