<?php

$pesquisar = $_REQUEST['pesquisar'] ?? '';


$filmes = (new DB)->ExecuteQuery(
    "select * from filmes WHERE titulo like 
    :pesquisar or autor like :pesquisar 
    or descricao like :pesquisar",
    Filme::class,
    ['pesquisar' => "%$pesquisar%"]
)->fetchAll();
view('filmes', compact('filmes'));

?>