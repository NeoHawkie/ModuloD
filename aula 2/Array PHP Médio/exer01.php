<?php
/*
1. Inversão de Array
Crie um algoritmo que leia um array de 10 números inteiros e depois
exiba os números na ordem inversa à que foram inseridos. Sem utilizar o array_reverse.
*/

$array = [];

echo "Entre com 10 valores para um array:\n";
for ($i = 0; $i < 10; $i++) {
    echo $i . ": ";
    $array[$i] = readline();
}

$temp;

echo "\nArray invertida:\n";
for ($i = 0, $j = 9; $i < 5; $i++, $j--) { //"espelha" a array.
    $temp = $array[$j];
    $array[$j] = $array[$i];
    $array[$i] = $temp;
}

for ($i = 0; $i < 10; $i++) {
    echo $i . ": " . $array[$i] . "\n";
}
