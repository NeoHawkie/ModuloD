<?php

class Filme
{

    public $id;
    public $titulo;
    public $autor;
    public $descricao;


    public static function make($item)
    {
        $filme = new Filme();
        $filme->id = $item['id'];
        $filme->titulo = $item['titulo'];
        $filme->autor = $item['autor'];
        $filme->descricao = $item['descricao'];
        return $filme;
    }
}
