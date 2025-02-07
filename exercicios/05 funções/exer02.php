<?php
/*
    2 - Crie uma função que calcule o fatorial de um número.
*/

function factorial(int $num)
{
    if ($num == 0) {
        return 1;
    } else {
        $n = $num;
        for ($i = $num; $i > 2; $i--) {
            echo "TESTE: \n" . $n . "*" . $i - 1 . "\n";
            $n = $n + ($n * ($i - 1));
            echo "n = ". $n . "\n\n";
        }
        echo "TESTE: \n" . $n . "*" . $i - 1 . "\n" . "n = ". $n . "\n\n";
    }
}

echo factorial(7);
