<?php
/*
2 - Crie dois arrays e use array_merge para combiná-los em um único array
*/

$array1 = range(1, 10); // array com valores de 1 a 10;
$array2 = range(11, 20); // array com valores de 11 a 20;

$mergedArrays = array_merge($array1, $array2); // "merged array" com valores de 1 a 20;

echo var_dump($mergedArrays);
?>