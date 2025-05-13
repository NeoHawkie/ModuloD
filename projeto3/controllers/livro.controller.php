<?php
$livro = $database->executeQuery(
    'SELECT * FROM livros WHERE id = :id',
    Livro::class,
    ['id' => $_REQUEST['id']]
)->fetch();

view('livro', ['livro' => $livro]);
?>