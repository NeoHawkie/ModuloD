<?php
/* 
    7. Utilizando vetores, cadastre 10 pessoas, sendo que você deverá utilizar um vetor para cadastrar cada pessoa.
    Obtenha seguintes dados do usuário: nome, cidade, idade, sexo. Ao final do cadastro e armazenamento seu programa
    deverá exibir: 
        1. Uma listagem de todos os nomes e idades das pessoas cadastradas;
        2. Uma listagem de todos os nomes de quem mora em Santos;
        3. Uma listagem de todos os nomes de quem tem mais de 18 anos;
        4. E quantas pessoas cadastradas são do sexo masculino.
*/

$lista[] = [
    'nome' => null,
    'cidade' => null,
    'idade' => null,
    'sexo' => null
];

echo "\n-------------- CADASTRO GERAL --------------\n";
for ($i = 0; $i < 10; $i++) {
    echo "\nID de cadastro Nº" . $i . ":\n";
    echo "Nome: ";
    $lista[$i]['nome'] = (string) readline();
    echo "Cidade: ";
    $lista[$i]['cidade'] = (string) readline();
    echo "Idade: ";
    $lista[$i]['idade'] = (int) readline();
    echo "Sexo: ";
    $lista[$i]['sexo'] = (string) readline();
}

echo "\nLista com nome e idade:";
for ($i = 0; $i < 10; $i++) {
    echo "\nID Nº" . $i . ":\n";
    echo $lista[$i]['nome'] . "\n";
    echo $lista[$i]['idade'] . "\n";
}

echo "\nMoradores de Santos:";
for ($i = 0; $i < 10; $i++) {
    if ($lista[$i]['cidade'] == "Santos") {
        echo "\nID Nº" . $i . ": " . $lista[$i]['nome'];
    }
}

echo "\nCadastrados maiores de 18 anos:";
for ($i = 0; $i < 10; $i++) {
    if ($lista[$i]['idade'] >= 18) {
        echo "\nID Nº" . $i . ": " . $lista[$i]['nome'];
    }
}

echo "\nCadastrados do sexo masculino:";
for ($i = 0; $i < 10; $i++) {
    if ($lista[$i]['sexo'] == "m" || $lista[$i]['sexo'] == "masculino") {
        echo "\nID Nº" . $i . ": " . $lista[$i]['nome'];
    }
}

