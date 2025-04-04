<?php
include('db.php');

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_GET['pesquisar'])) {
    $query = db()->prepare("SELECT livros.ID, livros.titulo, livros.autor, livros.descricao, livros.cover_name, usuarios.nome
                            FROM livros 
                            INNER JOIN usuarios ON livros.userid = usuarios.id 
                            WHERE livros.titulo LIKE :pesquisar OR livros.autor LIKE :pesquisar");
    $query->execute([
        'pesquisar' => '%' . $_GET['pesquisar'] . '%'
    ]);
    $livros = $query->fetchall();
} else {
    $query = db()->prepare("SELECT livros.ID, livros.titulo, livros.autor, livros.descricao, livros.cover_name, usuarios.nome
                            FROM livros
                            INNER JOIN usuarios ON livros.userid = usuarios.id
                            ORDER BY livros.ID DESC");
    $query->execute();
    $livros = $query->fetchall();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans text-gray-900">

    <header class="bg-blue-600 p-4 text-white">
        <nav class="container mx-auto flex justify-between">
            <a href="login.php" class="hover:text-blue-200">Login</a>
            <a href="novo-usuario.php" class="hover:text-blue-200">Novo Usuário</a>
            <a href="novo-livro.php" class="hover:text-blue-200">Novo Livro</a>
            <a href="logout.php" class="hover:text-blue-200">Logout</a>
        </nav>
    </header>

    <main class="max-w-7xl mx-auto px-4 py-10">
        <form action="index.php" method="GET" class="mb-6 flex justify-center items-center space-x-4">
            <input type="text" name="pesquisar" class="p-2 rounded border border-gray-300" placeholder="Pesquisar livro ou autor">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">Pesquisar</button>
        </form>
        <h2 class="text-2xl font-semibold mb-4">Últimos livros:</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php if (count($livros) === 0): ?>
                <p class="text-center text-gray-500">Nenhum livro encontrado.</p>
            <?php endif; ?>
            <?php foreach ($livros as $livro): ?>
                <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
                    <img src="uploads/<?= $livro['cover_name'] ?>" alt="<?= $livro['cover_name'] ?>" class="w-full h-80 object-contain p-1 object-center">
                    <div class="p-4">
                        <h1 class="text-xl font-semibold text-gray-800 mb-2"><?= $livro['titulo'] ?></h1>
                        <p class="text-gray-600 mb-4">
                            <?php if (empty($livro['descricao'])) {
                                echo 'Sem descrição...';
                            } else {
                                echo $livro['descricao'];
                            } ?>
                        </p>
                        <h2 class="text-sm font-semibold text-gray-800 mb-2 text-end"><?= $livro['autor'] ?></h2>
                        <h2 class="text-sm font-semibold text-gray-600 mb-2 text-end">Cadastrado por: <?= $livro['nome'] ?></h2>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

</body>

</html>