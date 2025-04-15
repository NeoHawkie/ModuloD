<?php


require 'dados.php';


$id = $_REQUEST['id']; 
$filtrado = array_filter($filmes, fn($f) => $f['id'] == $id); 
$filme = array_pop($filtrado); 

view('filme', ['filme' => $filme]);

?>