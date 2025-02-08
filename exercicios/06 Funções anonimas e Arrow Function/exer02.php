<?php
/*
    2 - Crie uma função anônima que filtre apenas os números pares de um array.
*/

$array = range(1, 50, 3); //cria array de 1 a 50 com intervalos de 3 em 3;

//$array = array_filter($array, fn($valor) => ($valor % 2) == 0); //$array recebe os seus valores filtrados pela função (que pega cada valor de cada índice e salva em $valor, e passa pela função após =>);

$filtro = function($valor){
    return $valor % 2 == 0;
};
$array = array_filter($array, $filtro);

echo var_dump($array);
