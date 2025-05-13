<?php

$filme = $database->executeQuery(
    'SELECT * FROM filmes WHERE id = :id',
    Filme::class,
    ['id' => $_REQUEST['id']]
)->fetch();
view('filme', ['filme' => $filme]);

?>