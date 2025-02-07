<?php
/*
1 - Crie um array associativo e use array_keys para obter um
array com as chaves desse array
*/

$charLvl = [
    'Hawkie' => 52,
    'Eileen' => 52,
    'Nastacia' => 51,
    'Agni' => 45,
    'Aisha' => 51,
    'Heinkel' => 45,
    'Sarah' => 52,
    'Ryu' => 48,
    'Grimma' => 51
];

$chars = array_keys($charLvl);

echo var_dump($chars);
