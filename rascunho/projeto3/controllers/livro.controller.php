<?php

$livro = (new DB)->livro($_REQUEST['id']);


view('livro', ['livro' => $livro]);

?>