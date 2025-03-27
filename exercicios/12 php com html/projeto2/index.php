<?php
include('db.php');

if (!isset($_SESSION)) {
    session_start();
}

$query = db()->prepare("select livros.*, usuarios.nome from livros inner join usuarios on livros.userid = usuarios.id");
$query->execute();
$livros = $query->fetchall();

// if (isset($_GET['pesquisar'])) {
//     $query = db()->prepare("select livros.*, usuarios.nome from livros inner join usuarios on livros.userid = usuarios.id where livros.autor or livros.titulo like");
//     $query->execute();
//     $livros = $query->fetchall();
// }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <a href="login.php">login</a>
        <a href="novo-usuario.php">novo usuario</a>
        <?php //if(isset($_SESSION['id'])){ 
        ?>
        <a href="novo-livro.php">novo livro</a>
        <a href="logout.php">logout</a>
        <?php //} 
        ?>
    </header>
    <!-- <form action="index.php" method="GET">
        <input type="text" name="pesquisar">
        <button type="submit" name="pesquisar">Pesquisar</button>
    </form> -->
    <h2>Lista de livros</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Descricao</th>
                <th>Inserido por</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($livros as $livro) : ?>
                <tr>
                    <td><?= $livro['ID'] ?></td>
                    <td><?= $livro['titulo'] ?></td>
                    <td><?= $livro['autor'] ?></td>
                    <td><?= $livro['descricao'] ?></td>
                    <td><?= $livro['nome'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</body>

</html>