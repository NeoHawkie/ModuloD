<?php
/*
5. Crie um vetor que armazene o nome de todos os meses do ano.
Peça ao usuário que digite um número e ele informe qual o nome do mês correspondente. 
*/

$meses = [null, "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

echo "\nEntre com um número referente a um mês do ano: ";
$num = readline();

if ($num == 0 || $num > 12){
    echo "\n!!! Valor inválido !!!";
    exit;
}

echo "Você digitou o número " . $num . ". Corresponde ao mês de " . $meses[$num] . ".";

?>