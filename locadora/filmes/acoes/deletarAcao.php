<?php

require "../../conexao.php";

session_start();

$id = $_GET['id'];
$usuarioLogado = $_SESSION['userId'];

$sql = "UPDATE `filmes` SET `deleted_at`=CURRENT_TIMESTAMP,`deleted_by`=$usuarioLogado WHERE id = $id";


if ($conn->query($sql) === TRUE) {
    $conn->close();
    header('Location:../listar.php?acao=deletar&msg=filme deletado :)');
} else {
    echo $titulo . "nao foi excluido com sucesso :( ";

}

$conn->close();

?>