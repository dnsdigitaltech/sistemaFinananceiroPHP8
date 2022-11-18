<?php 
    require_once("config.php");
    
    date_default_timezone_set('America/Sao_Paulo');

    try {
        $pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8mb4",$usuario,$senha);
    } catch (\Throwable $e) {
        echo "<p>Erro ao tentar conectar o banco de dados </p>".$e;
    }
?>