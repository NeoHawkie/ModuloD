<?php
/*
    7 - Crie um array de palavras e use implode para transformá-lo em uma string, separando
    as palavras por vírgulas.
*/

$array = ['Palma palma palma', 'pé pé pé', 'roda roda roda', 'carangueijo peixe é!']; //Array com 4 frases;
$string = implode(', ', $array); // transformadas em um string separando os valores por ", ";

echo $string;
