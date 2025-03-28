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
    <title>Atualizar Dados do Usuário</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans text-gray-900">

    <main class="flex justify-center items-center h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-semibold mb-6 text-center">Atualizar Dados do Usuário</h2>

            <form action="acoes.php" method="POST" class="space-y-6">
                <div>
                    <label for="nome" class="block text-sm font-medium text-gray-700">Nome</label>
                    <input type="text" name="nome" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Digite seu nome">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Digite seu email">
                </div>

                <div>
                    <label for="senha" class="block text-sm font-medium text-gray-700">Senha</label>
                    <input type="password" name="senha" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Digite sua nova senha">
                </div>

                <button type="submit" name="atualizar_usuario" class="w-full py-3 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition">Atualizar</button>
            </form>
        </div>
    </main>

</body>

</html>
