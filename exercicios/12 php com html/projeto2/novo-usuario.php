<?php

if (!isset($_SESSION)) {
    session_start();
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Novo usuário</h2>

    <form action="acoes.php" method="POST">
        <label for="nome">Nome</label>
        <input type="text" name="nome" required><br>
        <label for="email">Email</label>
        <input type="email" name="email" required><br>
        <label for="senha">Senha</label>
        <input type="password" name="senha" required><br>
        <button type="submit" name="cadastrar_usuario">Cadastrar</button>
    </form>
</body>

</html>