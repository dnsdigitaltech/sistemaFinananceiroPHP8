<?php 
    require_once("config.php");
    $pdo = new PDO("mysql:dbname=$banco;host=$servidor; charset=utf8mb4;","$usuario","$senha");
?>