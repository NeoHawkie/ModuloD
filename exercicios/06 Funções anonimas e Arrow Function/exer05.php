<?php
/*
    5 - Crie uma função anônima para ordenar um array de strings pelo tamanho das strings (da
    menor para a maior).
*/

$ordena = function ($strArray) { // bubble sort com tamanho da array e tamanho das strings na array;
    for ($j = 0; $j < count($strArray); $j++) {
        for ($i = 0; $i < count($strArray); $i++) {
            if (strlen($strArray[$j]) < strlen($strArray[$i])) {
                $temp = $strArray[$j];
                $strArray[$j] = $strArray[$i];
                $strArray[$i] = $temp;
            }
        }
    }
    return $strArray;
};

$array = ["aasd", "asdadassdasd", "as", "asdasdasd", "ass", "fsdg", "sd3as"]; //a array a ser ordenada

echo var_dump($ordena($array)); //chamando a função anonima.

?>


resolução do professor:
<?php
$ordenarPorTamanho = function ($a, $b) {
    echo strlen($a) . " :a\t b: " . strlen($b) . "\n";
    return strlen($a) - strlen($b);
};

$palavras = ["banana", "maca", "laranja", "uva"];
usort($palavras, $ordenarPorTamanho);
print_r($palavras);
?>