<?php
/*
    6 - Crie uma string com palavras separadas por vírgulas e use explode para transformá-la
    em um array.
*/

$kids = "batatinha quando nasce, espalha rama pelo chão, meu amor por ti, é maior que o coração!"; //string;

$array = explode(', ', $kids); //separa a string em uma array, onde cada indice recebe os valores entre ", ";

echo var_dump($array);

?>