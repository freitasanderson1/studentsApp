<?php

$host = 'localhost';
$db = 'studentsapp';
$port = 3306;
$user = 'anderson';
$pass = 'andex301';

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$db;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'Erro na conexão com o banco de dados: ' . $e->getMessage();
    exit;
}
?>