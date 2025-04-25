<?php

$pesquisar = $_REQUEST['pesquisar'] ?? '';


$livros = (new DB)->ExecuteQuery(
    "select * from livros WHERE titulo like 
    :pesquisar or autor like :pesquisar 
    or descricao like :pesquisar",
    Livro::class,
    ['pesquisar' => "%$pesquisar%"]
)->fetchAll();


view('livros', compact('livros'));
?>