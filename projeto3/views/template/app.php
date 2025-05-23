<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-stone-950 text-stone-200">

    <header class="bg-stone-900">
        <nav class="mx-auto max-w-screen-lg flex justify-between px-8 py-4">
            <div class="font-bold text-xl tracking-wide"><a href="/">Biblio Senac</a></div>
            <ul class="flex space-x-4 font-bold">
                <li><a href="livros" class="text-lime-500">Livros</a></li>
                <li><a href="filmes" class="text-lime-500">Filmes</a></li>
                <li><a href="meus-livros" class="hover:underline">Meus Livros</a></li>
            </ul>

            <ul>
                <li class="hover:underline"><a href="login">Fazer Login</a></li>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg space-y-6">

         <?php require "views/{$view}.view.php"; ?>
         
    </main>

</body>

</html>