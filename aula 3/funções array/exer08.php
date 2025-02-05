<?php
/*
    8 - Crie um array de números e use array_map para aplicar uma função que dobra o valor
    de cada número.
*/

function multiplica2($array){ //função que multiplica a variavel nela inserida por 2, e a retorna;
    return $array*2;
}

$array = range(0,10); // array com valores de 0 a 10;

$mapped = array_map('multiplica2', $array); // array "mapeada", percorrida e cada valor foi aplicada a função multiplica2;

echo var_dump($mapped);

?>