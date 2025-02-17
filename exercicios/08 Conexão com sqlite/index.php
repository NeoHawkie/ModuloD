<?php

include 'Usuarios.php';

$db = new PDO('sqlite:exercicios\maindb.sqlite');
$queries = [
    'cadastrar' => $db->prepare("insert into usuarios(nome, email, senha) values (:nome, :email, :senha)"),
    'mostrarTodos' => $db->prepare("select * from usuarios"),
    'deletar' => $db->prepare("delete from usuarios where id = :id"),
    'mostrarPorEmail' => $db->prepare("select * from usuarios where email = :email"),
    'alterar' => $db->prepare("update usuarios set nome = :nome, email = :email, senha = :senha where email = :cadastro")
];


echo "Bem vindo ao cadastro de usuários! \n";

$menu = 0;
while ($menu != 6) {

    echo "\nEscolha uma opção: \n";
    echo "1 - Cadastrar \t\t";
    echo "2 - Mostrar Todos \n";
    echo "3 - Deletar \t\t";
    echo "4 - Buscar por Email \n";
    echo "5 - Alterar \t\t";
    echo "6 - Sair \n--->  ";

    $menu = readline();
    switch ($menu) {
        case 1: // cadastrar
            echo "\nEntre com o nome:\n";
            $n = readline();
            echo "Entre com o email:\n";
            $e = readline();
            echo "Entre com a senha:\n";
            $s = readline();

            if (verificaEmail($e, $db)) {
                $queries['cadastrar']->execute([
                    'nome' => $n,
                    'email' => $e,
                    'senha' => $s
                ]);
                echo "\n***Usuário cadastrado com sucesso!***";
                break;
            } else {
                echo "\n***Email JÁ está em uso! Tente novamente!***";
                break;
            }

        case 2: // mostrar todos
            $queries['mostrarTodos']->execute();
            $lista = $queries['mostrarTodos']->fetchAll();
            //var_dump($lista); //teste
            foreach ($lista as $u) {
                echo "------------------------------------------\n";
                echo "ID: " . $u['id'] . "\n";
                echo "Nome: " . $u['nome'] . "\n";
                echo "Email: " . $u['email'] . "\n";
                echo "Senha: " . $u['senha'] . "\n";
                echo "------------------------------------------\n";
            }
            break;

        case 3: // deletar
            echo "Entre com um email cadastrado:\n";
            $e = readline();
            if (!verificaEmail($e, $db)) {
                $queries['mostrarPorEmail']->execute(['email' => $e]);
                $u = $queries['mostrarPorEmail']->fetch();
                echo "------------------------------------------\n";
                echo "ID: " . $u['id'] . "\n";
                echo "Nome: " . $u['nome'] . "\n";
                echo "Email: " . $u['email'] . "\n";
                echo "Senha: " . $u['senha'] . "\n";
                echo "------------------------------------------\n";
                echo "Deseja realmente deletar este cadastro?(s/n)\n";
                $opt = readline();
                if ($opt == 's') {
                    $queries['deletar']->execute(['id' => $u['id']]);
                    echo "\n***Usuário deletado!***";
                } elseif ($opt == 'n') {
                    break;
                }
            } else {
                echo "***Email NÃO encontrado!***\n";
            }
            break;

        case 4: // buscar por email
            echo "Entre com um email cadastrado:\n";
            $e = readline();
            if (!verificaEmail($e, $db)) {
                $queries['mostrarPorEmail']->execute(['email' => $e]);
                $u = $queries['mostrarPorEmail']->fetch();
                echo "------------------------------------------\n";
                echo "ID: " . $u['id'] . "\n";
                echo "Nome: " . $u['nome'] . "\n";
                echo "Email: " . $u['email'] . "\n";
                echo "Senha: " . $u['senha'] . "\n";
                echo "------------------------------------------\n";
            } else {
                echo "***Email NÃO encontrado!***\n";
            }
            break;

        case 5: // alterar 
            echo "Entre com um email cadastrado:\n";
            $cadastro = readline();
            if (!verificaEmail($cadastro, $db)) {
                echo "\nEntre com o novo nome:\n";
                $n = readline();
                echo "Entre com o novo email:\n";
                $e = readline();
                echo "Entre com a nova senha:\n";
                $s = readline();
                $queries['alterar']->execute(['nome' => $n, 'email' => $e, 'senha' => $s, 'cadastro' => $cadastro]);
                echo "\n***Cadastro atualizado com sucesso!***";
            } else {
                echo "***Email NÃO encontrado!***\n";
            }
            break;

        case 6: // sair
            echo "\nObrigado por utilizar o cadastro de usuários!\n";
            exit;
            break;

        default:
            echo "\nEntre com número válido!\n";
            break;
    }
}

function verificaEmail($email, $db)
{
    $query = $db->prepare("select id from usuarios where email = :email");
    $t = $query->execute(['email' => $email]);
    //echo $t; //teste
    if ($query->fetch() == null) {
        //echo "\n***Email disponível/não cadastrado***\n";
        return true;
    } else {
        //echo "\n***Email indisponível/JÁ cadastrado!***\n";
        return false;
    }
}
