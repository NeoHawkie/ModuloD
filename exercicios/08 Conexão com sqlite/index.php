<?php

include 'Usuarios.php';

$db = new PDO('sqlite:exercicios\maindb.sqlite');
$queries = [
    'cadastrar' => $db->prepare("insert into usuarios(nome, email, senha) values (:nome, :email, :senha)"),
    'mostrarTodos' => $db->prepare("select * from usuarios"),
    'deletar' => $db->prepare("delete from usuarios where id = :id"),
    'mostrarPorEmail' => $db->prepare("select * from usuarios where email = :email")
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
            do {
                echo "\nEntre com o nome:\n";
                $n = readline();
                echo "Entre com o email:\n";
                $e = readline();
                echo "Entre com a senha:\n";
                $s = readline();
            } while (!verificaEmail($e, $db));
            echo "***Usuário cadastrado com sucesso!***\n";

            $queries['cadastrar']->execute([
                'nome' => $n,
                'email' => $e,
                'senha' => $s
            ]);
            break;

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
            do {
                echo "Entre com um email cadastrado:\n";
                $e = readline();
            } while (verificaEmail($e, $db));
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
                $queries['deletar']->execute(['id'=>$u['id']]);
            }elseif ($opt == 'n') {
                break;
            }
            break;

        case 4: // buscar por email

            break;

        case 5: // alterar 

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
        //echo "\n***Email disponível***\n";
        return true;
    } else {
        //echo "\n***Email JÁ cadastrado!***\n";
        return false;
    }
}
