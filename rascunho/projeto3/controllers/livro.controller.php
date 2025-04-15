<?php

//puxa a bd
require 'dados.php';



$id = $_REQUEST['id']; //verifica o id do livro que foi selecionado
// $filtrado = array_filter($livros, fn($l) => $l['id'] == $id); //filtra
// $livro = array_pop($filtrado); //retira da array o ultimo elemento, e já q é uma array dentro de outra, fica somente a array filtrada.
$query = db()->prepare("SELECT id, titulo, autor, descricao FROM livros
                        WHERE id = :id");
$query->execute([
    'id' => $id
]);
$livro = $query->fetch();

//chama a view do livro com o livro filtrado como data
view('livro', ['livro' => $livro]);

?>