<?php

include('db.php');

if (!isset($_SESSION)) {
    session_start();
}


if (isset($_POST['atualizar_usuario'])) {

    if (strlen($_POST['nome']) == 0) {
        header('Location: update.php');
        $_SESSION['mensagem'] = 'O campo nome é obrigatorio!';
        exit();
    } elseif (strlen($_POST['email']) == 0) {
        header('Location: update.php');
        $_SESSION['mensagem'] = 'O campo email é obrigatorio!';
        exit();
    } elseif (strlen($_POST['senha']) == 0) {
        header('Location: update.php');
        $_SESSION['mensagem'] = 'O campo senha é obrigatorio!';
        exit();
    } else {

        $id = ($_SESSION['id']);
        $nome = ($_POST['nome']);
        $email = ($_POST['email']);
        $senha = ($_POST['senha']);

        $query = db()->prepare("update usuarios set nome = :nome, email = :email, senha = :senha where id = :id");
        $user = $query->execute([
            'nome' => $nome,
            'email' => $email,
            'senha' => $senha
        ]);

        header('Location: index.php');
    }
}

if (isset($_POST['cadastrar_usuario'])) {

    if (strlen($_POST['nome']) == 0) {
        header('Location: cadastrar.php');
        $_SESSION['mensagem'] = 'O campo nome é obrigatorio!';
        exit();
    } elseif (strlen($_POST['email']) == 0) {
        header('Location: cadastrar.php');
        $_SESSION['mensagem'] = 'O campo email é obrigatorio!';
        exit();
    } elseif (strlen($_POST['senha']) == 0) {
        header('Location: cadastrar.php');
        $_SESSION['mensagem'] = 'O campo senha é obrigatorio!';
        exit();
    } else {

        $nome = ($_POST['nome']);
        $email = ($_POST['email']);
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

        $query = db()->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
        $user = $query->execute([
            'nome' => $nome,
            'email' => $email,
            'senha' => $senha
        ]);

        header('Location: login.php');
    }
}

if (isset($_POST['logar'])) {

    if (strlen($_POST['email']) == 0) {
        header('Location: login.php');
        exit();
    } elseif (strlen($_POST['senha']) == 0) {
        header('Location: login.php');
        exit();
    } else {

        $query = db()->prepare("SELECT * FROM usuarios WHERE email = :email");
        $query->execute([
            'email' => $_POST['email']
        ]);

        $user = $query->fetch();
        if (password_verify($_POST['senha'], $user['senha'])) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['nome'] = $user['nome'];
            $_SESSION['email'] = $user['email'];
            header('Location: painel.php');
        } else {
            $_SESSION['mensagem'] = 'Email ou senha invalidos!';
            header('Location: login.php');
        }
    }
}

if (isset($_POST['cadastrar_livro'])) {

    if (strlen($_POST['titulo']) == 0) {
        header('Location: novo-livro.php');
        $_SESSION['mensagem'] = 'O campo titulo é obrigatorio!';
        exit();
    } elseif (strlen($_POST['autor']) == 0) {
        header('Location: novo-livro.php');
        $_SESSION['mensagem'] = 'O campo autor é obrigatorio!';
        exit();
    } else {

        $titulo = ($_POST['titulo']);
        $autor = ($_POST['autor']);
        $userid = ($_POST['userid']);
        
        if (strlen($_POST['descricao']) != 0) {
            $descricao = ($_POST['descricao']);


            $query = db()->prepare("INSERT INTO livros (titulo, autor, descricao, userid) VALUES (:titulo, :autor, :descricao, :userid)");
            $user = $query->execute([
                'titulo' => $titulo,
                'autor' => $autor,
                'descricao' => $descricao,
                'userid' => $userid
            ]);
        }else{
            $query = db()->prepare("INSERT INTO livros (titulo, autor, userid) VALUES (:titulo, :autor, :userid)");
            $user = $query->execute([
                'titulo' => $titulo,
                'autor' => $autor,
                'userid' => $userid
            ]);
        }

        header('Location: painel.php');
    }
}
