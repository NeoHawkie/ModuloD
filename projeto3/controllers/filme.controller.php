<?php

$filme = (new DB)->executeQuery(
    'SELECT * FROM filmes WHERE id = :id',
    Filme::class,
    ['id' => $_REQUEST['id']]
)->fetch();
view('filme', ['filme' => $filme]);

?>