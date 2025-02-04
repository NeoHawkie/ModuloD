<?php
/*
6. Faça um programa que leia 10 valores e os escreva na ordem contrária à que foram digitados. 
*/

$array = [];
$arrayInversa = [];

echo "Entre com 10 valores para um array:\n";
for ($i = 0, $j = 9; $i < 10; $i++, $j--) {
    echo "Valor " . $i . ": ";
    $array[$i] = readline();
    $arrayInversa[$j] = $array[$i];
}

echo "Array inversa:";
for ($i = 0; $i < 10; $i++) {
    echo "\nValor " . $i . ": " . $arrayInversa[$i];
}
