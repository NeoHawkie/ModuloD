<?php

include 'Usuarios.php';

$contador = 1;
$usuarios = [];
$u = new Usuarios();

echo "Bem vindo ao cadastro de usuários! \n";

$menu = 0;
while ($menu != 6) {

    echo "\nEscolha uma opção: \n";
    echo "1 - Cadastrar \t\t";
    echo "2 - Mostrar Todos \n";
    echo "3 - Deletar \t\t";
    echo "4 - Buscar por Email \n";
    echo "5 - Alterar \t\t";
    echo "6 - Sair \n";

    $menu = readline();
    switch ($menu) {
        case 1: // cadastrar
            echo "Informe seu nome: \n";
            $n = readline();
            echo "Informe seu email: \n";
            $e = readline();
            echo "Informe sua senha: \n";
            $s = readline();

            $usuarios =  $u->cadastrar($contador, $n, $e, $s, $usuarios);

            if ($contador == count($usuarios)) {
                $contador++;
            }

            break;

        case 2: // mostrar todos
            $u->mostrarTodos($usuarios);
            break;

        case 3: // deletar
            echo "Infor o ID do cadastro a ser deletado: \n";
            $id = readline();
            $usuarios =  $u->deletar($id, $usuarios);
            $contador--;
            break;

        case 4: // buscar por email
            echo "Informe o email: \n";
            $e = readline();
            $u->buscarPorEmail($e, $usuarios);
            break;

        case 5: // alterar 
            echo "Informe o ID do cadastro que deseja alterar: \n";
            $id = readline();
            for ($i = 0; $i < count($usuarios); $i++) {
                if ($usuarios[$i]->ID == $id) {
                    echo "Usuário encontrado!\n";

                    echo "Entre com os novos dados abaixo. \n";
                    echo "Informe seu nome: \n";
                    $n = readline();
                    echo "Informe seu email: \n";
                    $e = readline();
                    echo "Informe sua senha: \n";
                    $s = readline();

                    $usuarios =  $u->alterar($i, $n, $e, $s, $usuarios);
                }
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
