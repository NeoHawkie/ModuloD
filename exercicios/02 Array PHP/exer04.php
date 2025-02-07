<?php
/*
4.Crie dois vetores, cada um com capacidade para armazenar 10 números.
Solicite ao usuário que entre com os valores nestes dois vetores. O programa deverá
mostrar a multiplicação dos dados dos vetores, em cada um de suas respectivas posições.
Ex. vetor_a[0] * vetor_b[0] e assim por diante. 
*/

$vet1 = [];
$vet2 = [];
$vetRes = [];

echo "Entre com os valores para o primeiro vetor: \n";
for ($i = 0; $i < 10; $i++) {
    echo "\nValor: ";
    $vet1[$i] = (int) readline();
}

echo "Entre com os valores para o segundo vetor: \n";
for ($i = 0; $i < 10; $i++) {
    echo "\nValor: ";
    $vet2[$i] = (int) readline();
}
// echo var_dump($vet1);


echo "Array 1 multiplicada pela array 2:\n";
for ($i = 0; $i < 10; $i++) {
    // $vetRes[$i] = $vet1[$i] * $vet2[$i];
    echo $vet1[$i] * $vet2[$i] . "\n";
}