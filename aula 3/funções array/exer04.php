<?php
/* 
4 - Crie dois arrays, um com chaves e outro com valores, e use array_combine para
combiná-los em um array associativo.
*/

$personagens = ['Hawkie', 'Eileen', 'Nastacia', 'Agni', 'Aisha', 'Heinkel', 'Sarah', 'Ryu', 'Grimma'];
$levels = [52, 52, 51, 45, 51, 45, 52, 48, 51];

$fichas = array_combine($personagens, $levels); // combina duas arrays usando a primeira array informada como indice e a segunda como os respectivos valores;

echo var_dump($fichas);

?>