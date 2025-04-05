<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Meu Site com PHP e Tailwind</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

  <header class="bg-white shadow">
    <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-blue-600">MeuSite</h1>
      <nav>
        <a href="#" class="text-gray-700 hover:text-blue-600 mr-4">Início</a>
        <a href="#" class="text-gray-700 hover:text-blue-600">Contato</a>
      </nav>
    </div>
  </header>

  

<main class="max-w-6xl mx-auto px-4 py-10">
  <h1 class="text-3xl font-bold mb-8 text-gray-800">Novas Publicações</h1>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <?php
    // Simulando um array de publicações (poderia vir do banco)
    $posts = [
      ["titulo" => "Primeira Publicação", "descricao" => "Descrição curta da primeira postagem.", "imagem" => "https://via.placeholder.com/400x200"],
      ["titulo" => "Segunda Publicação", "descricao" => "Mais um conteúdo interessante aqui.", "imagem" => "https://via.placeholder.com/400x200"],
      ["titulo" => "Terceira Publicação", "descricao" => "Explore mais esse artigo completo.", "imagem" => "https://via.placeholder.com/400x200"],
    ];

    foreach ($posts as $post): ?>
      <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
        <img src="<?= $post['imagem'] ?>" alt="<?= $post['titulo'] ?>" class="w-full h-48 object-cover">
        <div class="p-4">
          <h2 class="text-xl font-semibold text-gray-800 mb-2"><?= $post['titulo'] ?></h2>
          <p class="text-gray-600 mb-4"><?= $post['descricao'] ?></p>
          <a href="#" class="text-blue-600 font-medium hover:underline">Ler mais →</a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</main>



<footer class="bg-white mt-12 border-t">
    <div class="max-w-6xl mx-auto px-4 py-6 text-center text-sm text-gray-500">
      © <?= date('Y') ?> MeuSite. Todos os direitos reservados.
    </div>
  </footer>

</body>
</html>
