<?php
    require_once("../conexao.php");
    $nome   = $_POST['nome_usario'];
    $email  = $_POST['email_usario'];
    $senha  = $_POST['senha_usario'];
    $id     = $_POST['id_usario'];

    //VALIDAR EMAIL
    $query = $pdo->query("SELECT * FROM usuarios WHERE email = '$email'");
    $res = $query->fetch(PDO::FETCH_ASSOC);
    $id_usu = $res['id'];
    $totalReg = count($res);
    if($totalReg > 0 and $id_usu != $id){
        echo "Este email já está cadastrado para o usuário {$res['nome']}, escolha outro email!";
        exit();
    }

    $query = $pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id = $id");
            $query->bindValue(":nome", $nome);        
            $query->bindValue(":email", $email);
            $query->bindValue(":senha", $senha);
            $query->execute();
    echo 'Salvo com Sucesso!';
?>