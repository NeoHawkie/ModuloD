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
    <title>Adicionar Novo Livro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans text-gray-900">

    <main class="flex justify-center items-center h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
            <h2 class="text-2xl font-semibold mb-6 text-center">Adicionar um Novo Livro</h2>

            <form action="acoes.php" method="POST" class="space-y-6" enctype="multipart/form-data">
                <input type="text" name="userid" value="<?php echo $_SESSION['id'] ?>" required hidden>

                <div>
                    <label for="titulo" class="block text-sm font-medium text-gray-700">Título</label>
                    <input type="text" name="titulo" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Digite o título do livro">
                </div>

                <div>
                    <label for="autor" class="block text-sm font-medium text-gray-700">Autor</label>
                    <input type="text" name="autor" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Digite o nome do autor">
                </div>

                <div>
                    <label for="descricao" class="block text-sm font-medium text-gray-700">Descrição</label>
                    <textarea name="descricao" placeholder="Opcional..." class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <div>
                    <label for="cover" class="block text-sm font-medium text-gray-700">Capa do Livro</label>
                    <input type="file" name="cover" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <button type="submit" name="cadastrar_livro" class="w-full py-3 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition">Cadastrar</button>
            </form>
        </div>
    </main>

</body>

</html>
