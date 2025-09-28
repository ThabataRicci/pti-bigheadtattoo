<?php
/* Arquivo de conexão com o banco de dados */

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'bighead_tattoo_db');

try {
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->exec("SET NAMES 'utf8mb4'");
} catch (PDOException $e) {

    die("ERRO: Não foi possível conectar ao banco de dados. " . $e->getMessage());
}
