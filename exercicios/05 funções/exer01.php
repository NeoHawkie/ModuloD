<?php
/*
    1 - Crie uma função que receba um número e retorne "Par" se o número for par e "Ímpar" se
    for ímpar.
*/

function paridade (int $num){
    return $num % 2 == 0 ? 'par' : 'impar'; //retorna Par se divisivel por 2, impar se não;
}

echo "Entre com um valor inteiro: ";
$n = (int) readline();

echo $n . " é " . paridade($n);