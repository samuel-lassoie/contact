<?php
$host = 'localhost';
$db   = 'contact';
$user = 'root';
$pass = 'root';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new \PDO($dsn, $user, $pass);
} catch (\PDOException $e) {
    echo 'Impossible de se connecter à la BDD';
}
