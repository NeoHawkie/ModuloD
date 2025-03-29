<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticação</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
<?php

if(!isset($_SESSION)){
    session_start();
}

if (!isset($_SESSION['id'])) {
    echo "<div class='bg-white p-6 rounded-lg shadow-md text-center max-w-xs sm:max-w-md md:max-w-lg w-full'>
            <h1 class='text-2xl sm:text-2xl font-bold text-red-600'>Acesso Negado</h1>
            <p class='text-gray-600 mt-2 text-sm sm:text-base'>Você não tem permissão para acessar esta página.</p>
                <a href='index.php' class='mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 text-sm sm:text-base'>Voltar para a página inicial</a>
        </div>";
    exit;
}

?>
</body>
</html>
