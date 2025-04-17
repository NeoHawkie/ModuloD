<?php

//usado pelas controllers e pela abort pra mostrar uma pagina na tela e seus dados
function view($view, $data = []){

    foreach($data as $key => $value){
        $$key = $value;
    }

    //chama o app como pagina principal para exibir a view enviada.
    require "views/template/app.php";

}

//função de testinho
function dd(...$dump){
    echo '<pre>';
    var_dump($dump);
    echo '</pre>';

    die();
}

//define o código de resposta da solicitação, mostra a view do erro, e encerra o código com die()
function abort($code){

    http_response_code(404);
    view($code);
    die();
}

?>