<?php

$A; $B; $total;
echo "Entre com o valor para A: ";
$A = readline();
echo "\nEntre com o valor para B: ";
$B = readline();


if((is_int($A)==1) and (is_int($B)==1)){
    $total = $A + $B;
    echo "\nA + B = " . $total;
}else{
    echo "\nEntre com um valor inteiro!";
    exit;
}
?>