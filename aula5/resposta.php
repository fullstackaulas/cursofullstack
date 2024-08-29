<?php
//ini_set('error_reporting', E_ALL); // mesmo resultado de: error_reporting(E_ALL);
//ini_set('display_errors', 1);

$nome = $_GET['nome'];
$precoEmReais = $_GET['precoEmReais'];

$resultado = '';
$desconto = 0;
$porcentagem = 1;


if ($precoEmReais < 100) {
    $porcentagem = 0.2;
} else if ($precoEmReais >= 100 && $precoEmReais <= 500) {
    $porcentagem = 0.1;
} else {
    $porcentagem = 0.05;
}

$desconto = $porcentagem * $precoEmReais;


$precoFinal = $precoEmReais - $desconto;

$resultado = 'O produto ' . $nome . ' custa R$' . $precoEmReais . ' com desconto de ' . $porcentagem * 100 . '% (R$' . $desconto . ') ele saira por: R$' . $precoFinal;



echo $resultado;




?>