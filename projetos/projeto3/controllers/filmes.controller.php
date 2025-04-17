<?php

$filmes = (new DB)->filmes();
view('filmes', ['filmes' => $filmes]);

?>