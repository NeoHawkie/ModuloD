<?php

require 'dados.php';

$query = db()->prepare("SELECT id, titulo, autor, descricao FROM filmes");
$query->execute();
$filmes = $query->fetchall();
view('filmes', ['filmes' => $filmes]);

?>