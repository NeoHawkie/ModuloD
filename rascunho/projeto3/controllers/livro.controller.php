<?php

//puxa a bd
require 'dados.php';


$id = $_REQUEST['id']; //verifica o id do livro que foi selecionado
$filtrado = array_filter($livros, fn($l) => $l['id'] == $id); //filtra
$livro = array_pop($filtrado); //retira da array o ultimo elemento, e já q é uma array dentro de outra, fica somente a array filtrada.

//chama a view do livro com o livro filtrado como data
view('livro', ['livro' => $livro]);

?>