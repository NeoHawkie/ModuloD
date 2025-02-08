<?php
/*
    3 - Crie uma função anônima que calcule o quadrado de um número. Use-a para
    transformar um array de números em seus quadrados.
*/


$raiz = function($valor){
    return sqrt($valor);    //função anonima para a raiz quadrada;
};

$array = range(1, 10);

$array = array_map($raiz, $array);

echo var_dump($array);