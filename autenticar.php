<?php 
    require_once("conexao.php"); 

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
    $query->bindValue(":email", $email);
    $query->bindValue(":senha", $senha);
    $query->execute();
    $res = $query->fetchAll(PDO::FETCH_ASSOC);
?>