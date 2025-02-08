<?php
/*
    7 - Crie uma arrow function que verifique se um número é positivo e use-a para filtrar
    apenas os números positivos de um array.
*/

$array = range(-10,10);

print_r(array_filter($array, fn($valor) => ($valor >= 0))); //filtra a $array verificando valores maiores ou iguais a 0;