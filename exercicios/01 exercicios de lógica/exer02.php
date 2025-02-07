<?php
echo "Entre com um valor inteiro: ";
$num = (int) readline();

if($num%2 == 0){
    echo "\n" . $num . " é par!\n";
}else{
    echo "\n" . $num . " é impar!\n";
}

?>
