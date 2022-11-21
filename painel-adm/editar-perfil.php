<?php
    $nome   = $_POST['nome_usario'];
    $email  = $_POST['email_usario'];
    $senha  = $_POST['senha_usario'];
    $id     = $_POST['id_usario'];

    $query = $pdo->prepare("UPDATE usuarios SET nome :nome, email :email, senha :senha WHERE id = $id");
            $query->bindValue(":nome", $nome);        
            $query->bindValue(":email", $email);
            $query->bindValue(":senha", $senha);
            $query->execute();
?>