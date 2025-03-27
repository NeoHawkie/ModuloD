<?php

if (!isset($_SESSION)) {
    session_start();
}
include 'protect.php';
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Adicionar um novo livro</h2>

    <form action="acoes.php" method="POST">
        <input type="text" name="userid" value="<?php echo $_SESSION['id'] ?>" required>
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" required><br>
        <label for="autor">Autor</label>
        <input type="text" name="autor" required><br>
        <label for="descricao">Descrição</label>
        <textarea name="descricao" name="descricao" placeholder="Opcional..."></textarea>
        <button type="submit" name="cadastrar_livro">Cadastrar</button>
    </form>
</body>

</html>