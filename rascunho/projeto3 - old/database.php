<?php

class DB
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('sqlite:database.sqlite');
    }

    //função pra simplificar o uso dos comandos com sql
    //recebe a querry e executa... pode receber parametros
    public function query($query, $class = null, $params = []){
        $prepare = $this->db->prepare($query);

        if($class){
            //se receber uma classe, entra no if e altera o fetch mode pra fetch_class da classe recebida
            $prepare->setFetchMode(PDO::FETCH_CLASS, $class);
            //quando executar o fetchAll, vai puxar os dados já como o objeto da classe

        }
        $prepare->execute($params);
        //retorna o prepare, esperando o fetch ou fetchAll
        return $prepare;
    }
}
