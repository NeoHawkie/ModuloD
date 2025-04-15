<?php
//troca o nome na URL para o nome amigavel.
$controller = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);

//se o path não existir e o caminho ser vazio, ele preenche com 'index', que acaba sendo o primeiro controller que ele chama ali na linha 15
if(!$controller) $controller = 'index';


//se o caminho não existir, ele chama a função do functions.php abort com status code 404
if(!file_exists("controllers/{$controller}.controller.php")){
    abort(404);
}

//por hora, se passar pelo if acima ele vai redirecionar para o controller do index ou do livro
require "controllers/{$controller}.controller.php";
