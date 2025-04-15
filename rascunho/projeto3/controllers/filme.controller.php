<?php


require 'dados.php';


$id = $_REQUEST['id'];
// $filtrado = array_filter($filmes, fn($f) => $f['id'] == $id); 
// $filme = array_pop($filtrado); 
$query = db()->prepare("SELECT id, titulo, autor, descricao FROM filmes
                        WHERE id = :id");
$query->execute([
    'id' => $id
]);
$filme = $query->fetch();

view('filme', ['filme' => $filme]);

?>