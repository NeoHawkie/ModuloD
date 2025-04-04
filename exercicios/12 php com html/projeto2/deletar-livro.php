<?php
include 'protect.php';
include('db.php');

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_GET['ID'])) {

    $id = ($_GET['ID']);

    $query = db()->prepare("DELETE from livros where id = :id");
    $user = $query->execute([
        'id' => $id
    ]);
    $_SESSION['message'] = 'Livro excluído da lista';
    header('Location: ../painel.php');
}

if (isset($_GET['pesquisar'])) {
    $userid = $_SESSION['id'];
    $pesquisar = $_GET['pesquisar'];
    $query = db()->prepare("SELECT livros.ID, livros.titulo, livros.autor, livros.descricao, usuarios.nome
                            FROM livros 
                            INNER JOIN usuarios ON livros.userid = usuarios.id 
                            WHERE (livros.titulo LIKE :pesquisar OR livros.autor LIKE :pesquisar) and usuarios.id = :userid");
    $query->execute([
        'pesquisar' => '%' . $pesquisar . '%',
        'userid' => $userid
    ]);
    $livros = $query->fetchall();
} else {
    $userid = $_SESSION['id'];
    $query = db()->prepare("SELECT livros.ID, livros.titulo, livros.autor, livros.descricao, usuarios.nome
                        FROM livros
                        INNER JOIN usuarios ON livros.userid = usuarios.id
                        WHERE usuarios.id = :userid");
    $query->execute([
        'userid' => $userid
    ]);
    $livros = $query->fetchall();
}

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

    <main class="container mx-auto p-6">
        <h2 class="p-2 text-2xl font-semibold mb-4 text-center">Qual livro deseja deletar?</h2>

        <form action="deletar-livro.php" method="GET" class="mb-6 flex justify-center items-center space-x-4">
            <input type="text" name="pesquisar" class="p-2 rounded border border-gray-300" placeholder="Pesquisar livro ou autor">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">Pesquisar</button>
        </form>

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
                <?php foreach ($livros as $livro) : ?>
                    <tr class="border-t">
                        <td class="px-4 py-2"><?= $livro['ID'] ?></td>
                        <td class="px-4 py-2"><?= $livro['titulo'] ?></td>
                        <td class="px-4 py-2"><?= $livro['autor'] ?></td>
                        <td class="px-4 py-2"><?= $livro['descricao'] ?></td>
                        <td class="px-4 py-2">
                            <button type="button" class="px-2 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">
                                <a href="deletar-livro.php\?ID=<?= $livro['ID'] ?>">Deletar</a>
                            </button>
                        </td>
                    </tr>

                <?php endforeach ?>
            </tbody>
        </table>
        </form>
    </main>

</body>

</html>