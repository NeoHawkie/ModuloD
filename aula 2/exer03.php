<?php

/*
3. Digite 10 valores númericos e armazene em um vetor. Em seguida, solicite ao usuário
um número para multiplicar todos os elementos do vetor. O programa deverá exibir o 
resultado da multiplicação do número dado pelo usuário em todos os elementos armazenados. 
*/

$array = [];

echo "Entre com 10 valores inteiros para um vetor:\n";
for ($i = 0; $i < 10; $i++) {
    $array[$i] = readline();
}

echo "Entre com um número para multiplicar a todos os valores da array:\n";
$multiplicador = readline();

for ($i = 0; $i < 10; $i++) {
    $array[$i] *= $multiplicador;
    echo "\Array multiplicada: " . $array[$i];
}
