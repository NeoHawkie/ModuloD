<?php
/*
    Crie um objeto que contenha ID, nome, email e senha, com os metodos para:
    cadastro, alterar, deletar, mostrar todos, buscar por email.
    ao cadastrar, verifique se o email existe nos cadastros.
*/

class Usuarios
{
    public int $ID;
    public String $nome;
    public String $email;
    public String $senha;

    public function cadastrar(int $IdCont, String $nome, String $email, String $senha, array $usuarios)
    {
        if (!$this->buscarPorEmail($email, $usuarios)) {
            $u = new Usuarios();
            $u->ID = $IdCont;
            $u->nome = $nome;
            $u->email = $email;
            $u->senha = $senha;
            $usuarios[] = $u;
            echo "\nNovo usuário cadastrado com sucesso!\n";

            return $usuarios;
        } else {
            echo "\nNovo usuário NÃO cadastrado!\n";

            return $usuarios;
        }
    }

    public function alterar($indice, $nome, $email, $senha, $usuarios)
    {
        $usuarios[$indice]->nome = $nome;
        $usuarios[$indice]->email = $email;
        $usuarios[$indice]->senha = $senha;

        return $usuarios;
    }

    public function deletar($ID, $usuarios)
    {
        $deleted = false;
        for ($i = 0; $i < count($usuarios); $i++) {
            if ($usuarios[$i]->ID == $ID) {
                unset($usuarios[$i]);
                echo "\nUsuário deletado com sucesso!\n";
                $deleted = true;
            }
        }
        if (!$deleted) {
            echo "\nUsuário com ID " . $ID . " não encontrado!\n";
        }
        return $usuarios;
    }

    public function mostrarTodos($usuarios)
    {
        if (!count($usuarios) == 0) {
            foreach ($usuarios as $u) {
                echo "--------------------------------- \n";
                echo "ID: " . $u->ID . "\n";
                echo "Nome: " . $u->nome . "\n";
                echo "Email: " . $u->email . "\n";
                echo "Senha: " . $u->senha . "\n";
                echo "--------------------------------- \n";
            }
        }else {
            echo "--------------------------------- \n";
            echo "não há usuários cadastrados.\n";
            echo "--------------------------------- \n";
        }
    }

    public function buscarPorEmail($email, $usuarios)
    {
        foreach ($usuarios as $u) {
            if ($u->email == $email) {
                echo "\nUsuário cadastrado:\n";
                echo "----------------------------------------------------\n";
                echo "ID: " . $u->ID . "\n";
                echo "Nome: " . $u->nome . "\n";
                echo "Email: " . $u->email . "\n";
                echo "Senha: " . $u->senha . "\n";
                echo "----------------------------------------------------\n";
                return true;
            } else {
                echo "\nEmail disponível!\n";
                return false;
            }
        }
    }
}
