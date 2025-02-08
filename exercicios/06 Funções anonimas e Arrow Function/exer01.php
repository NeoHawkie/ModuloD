<?php
/*
    1 - Crie uma função anônima que receba um número e retorne o dobro dele. Use a função
    anônima para dobrar os valores de um array.
*/

$array = range(1,10); // cria $array com valores de 1 a 10;

//$array = array_map(fn($valor) => ($valor * 2), $array);  // $array recebe ela mesma "mapeada" (após cada valor passar) pela função;

$dobro = function($valor){  // função que retorna o dobro do valor que entra;
    return $valor*2;
};
$array = array_map($dobro, $array); // $array recebe ela mesma "mapeada" (após cada valor passar) pela função;

echo var_dump($array);