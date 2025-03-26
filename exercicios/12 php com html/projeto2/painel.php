<?php
if (!isset($_SESSION)) {
    session_start();
}

include 'protect.php';

?>

<h1> Bem vindo <?= $_SESSION['nome']; ?> </h1>
<a href="index.php">Pagina inicial</a>
<a href="logout.php">Deslogar</a>
<a href="update.php">Atualizar dados</a>
<a href="novo-livro.php">Cadastrar livro</a>