<?php
/*
3 - Crie um array e use array_push para adicionar novos elementos a ele.
*/

$array = range(10, 20); //array com valores de 10 a 20;

array_push($array, 21); //adiciona mais um indice ao array (11) e adiciona o valor 21

echo var_dump($array);

?>