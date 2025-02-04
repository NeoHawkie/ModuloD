<?php

/*
1. Entre com os dados de 10 alunos de uma classe, recebendo as informações como nome e uma nota do aluno.
Armazene estes dados em um vetor. Ao final do programa mostrar a média de nota da classe, e o nome do aluno que obteve maior nota. 
*/

$aluno = [];
$nota = [];
$media = 0;
$maior_nota;
$temp = 0;

for ($i = 0; $i < 10; $i++) {
    echo "\nEntre com os dados do aluno\n"; // coleto os dados nome e nota;
    echo "Nome: ";
    $nome[$i] = (string) readline();
    echo "Nota: ";
    $nota[$i] = (float) readline();
    $media += $nota[$i]; // somo as notas;

    if ($nota[$i] > $temp) { // verifico a maior nota;
        $maior_nota = $aluno[$i]; // se a nota for maior que a anterior, salvo o nome do aluno;
        $temp = $nota[$i]; // e salvo a nota pra seguir comparando;

        // echo "\n!!!nota guardada!!!\n" . $temp . "\n"; // teste;
    }
}

echo "\nAluno com maior nota: " . $maior_nota . "\t Media da turma: " . $media / count($aluno);

// echo "\nMedia da turma: ". array_sum($nota)/count($aluno);
// echo "\nAluno com maior nota: ". (float) array_search(max($nota), $aluno, true);
