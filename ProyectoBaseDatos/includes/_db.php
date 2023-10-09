<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "tienda";

try {
    $dsn = "mysql:host=$host;dbname=$database;charset=utf8";
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "No se realizó la conexión a la base de datos, el error fue: " . $e->getMessage();
    die(); 
}

?>
