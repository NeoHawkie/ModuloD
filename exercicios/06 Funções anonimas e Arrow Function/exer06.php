<?php
/*
    6 - Crie uma arrow function que some dois números e use-a para calcular a soma de dois
    valores.
*/

$a = 10;
$b = 20;

$soma = fn($n1, $n2) => $n1 + $n2; //função seta que soma variavel 1 e 2;

echo $soma($a, $b); //chama a função;