<?php

//puxa a bd ficticia
require 'dados.php';

//chama a função view do functions.php com o index e o livros da bd
$query = db()->prepare("SELECT id, titulo, autor, descricao FROM livros");
$query->execute();
$livros = $query->fetchall();
view('index', ['livros' => $livros]);

?>