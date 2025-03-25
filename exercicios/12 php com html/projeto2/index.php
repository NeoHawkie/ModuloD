<?php
include('db.php');

$query = db()->prepare("select * from livros");
$query->execute();
$livros = $query->fetchall();

// $livros[] = [
//     'titulo' => 'sla',
//     'autor' => 'pokna',
//     'descricao' => 'livro'
// ];

// $livros[] = [
//     'titulo' => 'look back',
//     'autor' => 'seila',
//     'descricao' => 'livro do filme q o carlos me recomendou'
// ];

// $livros[] = [
//     'titulo' => 'mirnaha',
//     'autor' => 'seila',
//     'descricao' => 'livro do filme 2'
// ];


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Descricao</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($livros as $livro) : ?>
                <tr>
                <td><?= $livro['id']?></td>
                <td><?= $livro['titulo']?></td>
                <td><?= $livro['autor']?></td>
                <td><?= $livro['descricao']?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    
</body>
</html>