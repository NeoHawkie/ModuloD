<?php
/*
2. Entre com 10 números e armazene em um vetor. Ao final o programa deverá mostrar:
- quantos negativos foram digitados; - quantos positivos foram digitados; - quantos pares e ímpares.
*/
$array = [];
$positivos = 0;
$negativos = 0;
$pares = 0;
$impares = 0;
echo "Entre abaixo com 10 inteiros para uma array: \n";
for ($i = 0; $i < 10; $i++) {
    echo "Valor: ";
    $array[$i] = (int) readline(); // leio os numeros

    if ($array[$i] < 0) { //verifico se é negativo;
        $negativos++; // armazeno;
    } elseif ($array[$i] > 0) { //verifico se é positivo;
        $positivos++; // armazeno;
    }

    if ($array[$i] % 2 == 0) { //verifico se é par;
        $pares++; // armazeno;
    } else { //se não for par, é impar;
        $impares++; // armazeno;
    }
}

echo $positivos . " números positivos.\n";
echo $negativos . " números negativos.\n";
echo $pares . " números pares.\n";
echo $impares . " números impares.\n";
