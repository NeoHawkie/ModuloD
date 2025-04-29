<?php
require_once 'core/Database.php';
session_start();

class Router {
    public static function route() {
        $pdo = Database::connect();
        $action = $_GET['action'] ?? 'login';

        switch ($action) {
            case 'login':
                require_once 'controllers/AuthController.php';
                (new AuthController($pdo))->login();
                break;
            case 'register':
                require_once 'controllers/AuthController.php';
                (new AuthController($pdo))->register();
                break;
            case 'logout':
                require_once 'controllers/AuthController.php';
                (new AuthController($pdo))->logout();
                break;
            case 'dashboard':
                require_once 'controllers/GameController.php';
                (new GameController($pdo))->dashboard();
                break;
            case 'add_game':
                require_once 'controllers/GameController.php';
                (new GameController($pdo))->addGame();
                break;
            case 'delete_game':
                require_once 'controllers/GameController.php';
                (new GameController($pdo))->deleteGame();
                break;
            default:
                echo "404 - Página não encontrada.";
        }
    }
}
?>