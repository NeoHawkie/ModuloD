<?php
/*
    4 - Crie uma função anônima que receba duas strings e as concatene. Use-a para combinar
    dois arrays de strings.
*/

$concat = function($strArray1, $strArray2){
    return array_merge($strArray1, $strArray2); //função anonima que junta duas arrays;
};

$array1 = ["olá", "mundo" , "sei lá", "o que"]; //arrays
$array2 = ["botar", "dentro", "dessas", "arrays"];

echo var_dump($concat($array1, $array2)); //echo de um var_dump com o concat recebendo as arrays como argumentos;