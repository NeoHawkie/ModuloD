<?php
/*
6. Faça um programa que leia 10 valores e os escreva na ordem contrária à que foram digitados. 
*/

$array = [];
$arrayInversa = [];

echo "Entre com 10 valores para um array:\n";
for ($i = 0, $j = 9; $i < 10; $i++, $j--) { //$i cuida da array principal e conta de 0 a 9, enquanto &j salva os valores de trás pra frente contando de 9 a 0;
    echo "Valor " . $i . ": ";
    $array[$i] = readline();
    $arrayInversa[$j] = $array[$i];
}

echo "\nArray inversa:";
for ($i = 0; $i < 10; $i++) {
    echo "\nValor " . $i . ": " . $arrayInversa[$i];
}
