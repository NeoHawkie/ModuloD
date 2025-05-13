<?php

//$pesquisar recebe o que estiver na barra de pesquisa, se existir, senão recebe '', que seria só o vazio mesmo.
$pesquisar = $_REQUEST['pesquisar'] ?? '';

//$livros recebe o prepare que retorna da função query criada no db
$livros = (new DB)->query(
    //a querry enviada pra função
    query: "select * from livros WHERE titulo like 
    :pesquisar or autor like :pesquisar 
    or descricao like :pesquisar",
    //a classe, que é a que está na model, e tem todas as variaveis pra receber as colunas do que vai puxar da bd
    class: Livro::class,
    //os parametros pra query, q é a array pesquisar com o que tiver no $pesquisar entre % pra afetar o like da query
    params: ['pesquisar' => "%$pesquisar%"]
)->fetchAll();


view('index', compact('livros'));
