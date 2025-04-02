<?php
include 'protect.php';
include 'db.php';

if (!isset($_SESSION)) {
    session_start();
}

$id = ($_SESSION['id']);

$query = db()->prepare("UPDATE usuarios set email = null, senha = null where id = :id");
$user = $query->execute([
    'id' => $id
]);

header('Location: logout.php');
