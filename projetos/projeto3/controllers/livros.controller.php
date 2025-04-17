<?php

$livros = (new DB)->livros();
view('livros', ['livros' => $livros]);

?>