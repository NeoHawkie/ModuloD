<?php 

/*
$livros = [
    ['id' => 1, 'titulo' => 'O Senhor dos Anéis: A Sociedade do Anel 1', 'autor' => 'J. R. R. Tolkien', 'descricao' => 'A Sociedade do Anel é a primeira parte da trilogia O Senhor dos Anéis, de J.R.R. Tolkien. Nela, Frodo Bolseiro e oito companheiros partem em uma jornada para destruir o Um Anel e salvar a Terra-média.'],
    ['id' => 2, 'titulo' => 'O Senhor dos Anéis: A Sociedade do Anel 2', 'autor' => 'J. R. R. Tolkien', 'descricao' => 'A Sociedade do Anel é a primeira parte da trilogia O Senhor dos Anéis, de J.R.R. Tolkien. Nela, Frodo Bolseiro e oito companheiros partem em uma jornada para destruir o Um Anel e salvar a Terra-média.'],
    ['id' => 6, 'titulo' => 'O Senhor dos Anéis: A Sociedade do Anel 3', 'autor' => 'J. R. R. Tolkien', 'descricao' => 'A Sociedade do Anel é a primeira parte da trilogia O Senhor dos Anéis, de J.R.R. Tolkien. Nela, Frodo Bolseiro e oito companheiros partem em uma jornada para destruir o Um Anel e salvar a Terra-média.'],
    ['id' => 4, 'titulo' => 'O Senhor dos Anéis: A Sociedade do Anel 4', 'autor' => 'J. R. R. Tolkien', 'descricao' => 'A Sociedade do Anel é a primeira parte da trilogia O Senhor dos Anéis, de J.R.R. Tolkien. Nela, Frodo Bolseiro e oito companheiros partem em uma jornada para destruir o Um Anel e salvar a Terra-média.'],
    ['id' => 5, 'titulo' => 'O Senhor dos Anéis: A Sociedade do Anel 5', 'autor' => 'J. R. R. Tolkien', 'descricao' => 'A Sociedade do Anel é a primeira parte da trilogia O Senhor dos Anéis, de J.R.R. Tolkien. Nela, Frodo Bolseiro e oito companheiros partem em uma jornada para destruir o Um Anel e salvar a Terra-média.'],
    ['id' => 6, 'titulo' => 'O Senhor dos Anéis: A Sociedade do Anel 6', 'autor' => 'J. R. R. Tolkien', 'descricao' => 'A Sociedade do Anel é a primeira parte da trilogia O Senhor dos Anéis, de J.R.R. Tolkien. Nela, Frodo Bolseiro e oito companheiros partem em uma jornada para destruir o Um Anel e salvar a Terra-média.'],
    ['id' => 7, 'titulo' => 'O Senhor dos Anéis: A Sociedade do Anel 7', 'autor' => 'J. R. R. Tolkien', 'descricao' => 'A Sociedade do Anel é a primeira parte da trilogia O Senhor dos Anéis, de J.R.R. Tolkien. Nela, Frodo Bolseiro e oito companheiros partem em uma jornada para destruir o Um Anel e salvar a Terra-média.'],
    ['id' => 8, 'titulo' => 'O Senhor dos Anéis: A Sociedade do Anel 8', 'autor' => 'J. R. R. Tolkien', 'descricao' => 'A Sociedade do Anel é a primeira parte da trilogia O Senhor dos Anéis, de J.R.R. Tolkien. Nela, Frodo Bolseiro e oito companheiros partem em uma jornada para destruir o Um Anel e salvar a Terra-média.'],
    ['id' => 9, 'titulo' => 'O Senhor dos Anéis: A Sociedade do Anel 9', 'autor' => 'J. R. R. Tolkien', 'descricao' => 'A Sociedade do Anel é a primeira parte da trilogia O Senhor dos Anéis, de J.R.R. Tolkien. Nela, Frodo Bolseiro e oito companheiros partem em uma jornada para destruir o Um Anel e salvar a Terra-média.'],

];

$filmes = [
    ['id' => 1, 'titulo' => 'filme O Senhor dos Anéis: A Sociedade do Anel 1', 'autor' => 'J. R. R. Tolkien', 'descricao' => 'A Sociedade do Anel é a primeira parte da trilogia O Senhor dos Anéis, de J.R.R. Tolkien. Nela, Frodo Bolseiro e oito companheiros partem em uma jornada para destruir o Um Anel e salvar a Terra-média.'],
    ['id' => 2, 'titulo' => 'filme O Senhor dos Anéis: A Sociedade do Anel 2', 'autor' => 'J. R. R. Tolkien', 'descricao' => 'A Sociedade do Anel é a primeira parte da trilogia O Senhor dos Anéis, de J.R.R. Tolkien. Nela, Frodo Bolseiro e oito companheiros partem em uma jornada para destruir o Um Anel e salvar a Terra-média.'],
    ['id' => 6, 'titulo' => 'filme O Senhor dos Anéis: A Sociedade do Anel 3', 'autor' => 'J. R. R. Tolkien', 'descricao' => 'A Sociedade do Anel é a primeira parte da trilogia O Senhor dos Anéis, de J.R.R. Tolkien. Nela, Frodo Bolseiro e oito companheiros partem em uma jornada para destruir o Um Anel e salvar a Terra-média.'],
    ['id' => 4, 'titulo' => 'filme O Senhor dos Anéis: A Sociedade do Anel 4', 'autor' => 'J. R. R. Tolkien', 'descricao' => 'A Sociedade do Anel é a primeira parte da trilogia O Senhor dos Anéis, de J.R.R. Tolkien. Nela, Frodo Bolseiro e oito companheiros partem em uma jornada para destruir o Um Anel e salvar a Terra-média.'],
    ['id' => 5, 'titulo' => 'filme O Senhor dos Anéis: A Sociedade do Anel 5', 'autor' => 'J. R. R. Tolkien', 'descricao' => 'A Sociedade do Anel é a primeira parte da trilogia O Senhor dos Anéis, de J.R.R. Tolkien. Nela, Frodo Bolseiro e oito companheiros partem em uma jornada para destruir o Um Anel e salvar a Terra-média.'],
    ['id' => 6, 'titulo' => 'filme O Senhor dos Anéis: A Sociedade do Anel 6', 'autor' => 'J. R. R. Tolkien', 'descricao' => 'A Sociedade do Anel é a primeira parte da trilogia O Senhor dos Anéis, de J.R.R. Tolkien. Nela, Frodo Bolseiro e oito companheiros partem em uma jornada para destruir o Um Anel e salvar a Terra-média.'],
    ['id' => 7, 'titulo' => 'filme O Senhor dos Anéis: A Sociedade do Anel 7', 'autor' => 'J. R. R. Tolkien', 'descricao' => 'A Sociedade do Anel é a primeira parte da trilogia O Senhor dos Anéis, de J.R.R. Tolkien. Nela, Frodo Bolseiro e oito companheiros partem em uma jornada para destruir o Um Anel e salvar a Terra-média.'],
    ['id' => 8, 'titulo' => 'filme O Senhor dos Anéis: A Sociedade do Anel 8', 'autor' => 'J. R. R. Tolkien', 'descricao' => 'A Sociedade do Anel é a primeira parte da trilogia O Senhor dos Anéis, de J.R.R. Tolkien. Nela, Frodo Bolseiro e oito companheiros partem em uma jornada para destruir o Um Anel e salvar a Terra-média.'],
    ['id' => 9, 'titulo' => 'filme O Senhor dos Anéis: A Sociedade do Anel 9', 'autor' => 'J. R. R. Tolkien', 'descricao' => 'A Sociedade do Anel é a primeira parte da trilogia O Senhor dos Anéis, de J.R.R. Tolkien. Nela, Frodo Bolseiro e oito companheiros partem em uma jornada para destruir o Um Anel e salvar a Terra-média.'],

];
*/

// function db(){
//     return $db = new PDO('sqlite:bd.sqlite');
// }

class DB{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('sqlite:bd.sqlite');
    }

    public function livros(){
        $query = $this->db->query("select * from livros");
        $items = $query->fetchAll();
        return array_map(fn($item) => Livro::make($item), $items);
    }

    public function livro($id){
        $query = $this->db->prepare("SELECT * FROM livros WHERE id = :id");
        $query->execute([
            'id' => $id
        ]);
        $items = $query->fetchAll();
        return array_map(fn($item) => Livro::make($item), $items)[0];
    }

    public function filmes(){
        $query = $this->db->query("select * from filmes");
        $items = $query->fetchAll();
        return array_map(fn($item) => Livro::make($item), $items);
    }

    public function filme($id){
        $query = $this->db->prepare("SELECT * FROM filmes WHERE id = :id");
        $query->execute([
            'id' => $id
        ]);
        $items = $query->fetchAll();
        return array_map(fn($item) => Livro::make($item), $items)[0];
    }
}
?>
