<?php
echo "Entre com um valor para A e outro para B:\n";
$A = (float) readline();
$B = (float) readline();
echo "Entre com a operação desejada:\n";
echo "+ \t - \t * \t /\n";
$opt = readline();
switch ($opt){
    case "+": 
        $total = $A + $B;
        echo "Resultado: " . $total;
        break;
    case "-": 
        $total = $A - $B;
        echo "Resultado: " . $total;
        break;
    case "*": 
        $total = $A * $B;
        echo "Resultado: " . $total;
        break;
    case "/": 
        $total = $A / $B;
        echo "Resultado: " . $total;
        break;

    default: echo "Entre com uma opção válida.";
    }
?>