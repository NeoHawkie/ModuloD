<?php

$pesquisar = $_REQUEST['pesquisar'] ?? '';


$filmes = $database->ExecuteQuery(
    query: "select * from filmes WHERE titulo like 
    :pesquisar or autor like :pesquisar 
    or descricao like :pesquisar",
    class: Filme::class,
    params: ['pesquisar' => "%$pesquisar%"]
)->fetchAll();

view('filmes', compact('filmes'));

?>