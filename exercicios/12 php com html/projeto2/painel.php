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
    <title>Painel de Bem-vindo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans text-gray-900">

    <main class="flex justify-center items-center h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h1 class="text-3xl font-semibold mb-6 text-center">Bem-vindo, <?= $_SESSION['nome']; ?>!</h1>

            <div class="space-y-4">
                <a href="index.php" class="block text-center text-blue-500 hover:text-blue-600">Página Inicial</a>
                <a href="logout.php" class="block text-center text-red-500 hover:text-red-600">Deslogar</a>
                <a href="deletar-usuario.php" onclick="return confirm('Deletar sua conta e voltar para a pagina inicial?')"
                 class="block text-center text-green-500 hover:text-green-600">Deletar Conta</a>
                <a href="update.php" class="block text-center text-blue-500 hover:text-blue-600">Atualizar Dados</a>
                <a href="novo-livro.php" class="block text-center text-red-500 hover:text-red-600">Cadastrar Livro</a>
                <a href="deletar-livro.php" class="block text-center text-green-500 hover:text-green-600"> Deletar Livro</a>
            </div>
        </div>
    </main>

</body>

</html>
