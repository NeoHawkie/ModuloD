<?php
echo "Entre com o número desejado para exibir a tabuada: ";
$num = (int) readline();

// if(is_integer($num) != 1){
//     echo "\nEntre com um valor inteiro!";
//     exit;
// }

for($i = 1; $i <= 10; $i++){
    echo "\n".$num."x".$i."=".($num*$i);
}
?>