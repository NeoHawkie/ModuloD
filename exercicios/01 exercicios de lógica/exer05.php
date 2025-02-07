<?php
$rand = rand(1, 100);
$lf = 5;

for($lf; $lf != 0;){
    echo "Tente advinhar um número entre 1 a 100:\n";
    $num = (int) readline();
    
    if($num != $rand){
        echo "\nErrou!\n";
        $lf--;
    }else{
        echo "\nAcertou!";
        exit;
    }
}
echo "\nAcabaram suas chances.\nO número correto era " . $rand;
?>