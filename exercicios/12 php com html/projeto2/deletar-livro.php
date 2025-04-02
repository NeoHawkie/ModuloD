<?php
include('db.php');

if (!isset($_SESSION)) {
    session_start();
}

$userid = $_SESSION['id'];
$query = db()->prepare("SELECT livros.ID, livros.titulo, livros.autor, livros.descricao, usuarios.nome
                        FROM livros
                        INNER JOIN usuarios ON livros.userid = usuarios.id
                        WHERE usuarios.id = :userid");
$query->execute([
    'userid' => $userid
]);
$livros = $query->fetchall();


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Livros</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans text-gray-900">

    <header class="bg-blue-600 p-4 text-white">
        <nav class="container mx-auto flex justify-between">
            <a href="login.php" class="hover:text-blue-200">Login</a>
            <a href="novo-usuario.php" class="hover:text-blue-200">Novo Usuário</a>
            <?php //if(isset($_SESSION['id'])){ 
            ?>
            <a href="novo-livro.php" class="hover:text-blue-200">Novo Livro</a>
            <a href="logout.php" class="hover:text-blue-200">Logout</a>
            <?php //} 
            ?>
        </nav>
    </header>

    <main class="container mx-auto p-6">
        <form action="index.php" method="GET" class="mb-6 flex justify-center items-center space-x-4">
            <input type="text" name="pesquisar" class="p-2 rounded border border-gray-300" placeholder="Pesquisar livro ou autor">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">Pesquisar</button>
        </form>


        <h2 class="text-2xl font-semibold mb-4">Qual livro deseja deletar?</h2>

        <table class="min-w-full table-auto bg-white shadow-md rounded-lg">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2 text-left">ID</th>
                    <th class="px-4 py-2 text-left">Título</th>
                    <th class="px-4 py-2 text-left">Autor</th>
                    <th class="px-4 py-2 text-left">Descrição</th>
                    <th class="px-4 py-2 text-left">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($livros as $i => $livro) : ?>
                    <form action="acoes.php" method="post">
                        <tr class="border-t">
                            <td class="px-4 py-2"><?= $livro['ID'] ?></td>
                            <input type="text" name="livroid">
                            <td class="px-4 py-2"><?= $livro['titulo'] ?></td>
                            <td class="px-4 py-2"><?= $livro['autor'] ?></td>
                            <td class="px-4 py-2"><?= $livro['descricao'] ?></td>
                            <td class="px-4 py-2"><button type="submit" class="px-2 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">Deletar</button></td>
                        </tr>
                    </form>
                <?php endforeach ?>
            </tbody>
        </table>
        </form>
    </main>

</body>

</html>