<?php


$livro = (new DB)->livro($_REQUEST['id']);

//chama a view do livro com o livro filtrado como data
view('livro', ['livro' => $livro]);

?>