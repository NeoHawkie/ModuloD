<?php
require 'Validacao.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $validacao = Validacao::validar([
        'nome' => ['required'],
        'email' => ['required', 'email', 'confirmed'],
        'senha' => ['required', 'strong', 'min:8', 'max:64']
    ], $_POST);

    if ($validacao->naoPassou()) {
        $_SESSION['validacao'] = $validacao->validacoes;
        header('Location: /login');
        exit;
    }

    $database->executeQuery(
        query: 'INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)',
        params: [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha']
        ]
    );

    $_SESSION['validacao'] = ['Registrado com sucesso!'];
    header('Location: /login');
    exit();
}
