<?php

//puxa a bd ficticia
require 'dados.php';

//chama a função view do functions.php com o index e o livros da bd
view('index', ['livros' => $livros]);

?>