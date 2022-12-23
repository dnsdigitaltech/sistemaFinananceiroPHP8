<?php
    require_once("../../conexao.php");
    $nivel   = $_POST['nivel'];
    $id     = @$_POST['id'];

    //VALIDAR CAMPO
    $query = $pdo->query("SELECT * FROM niveis WHERE nivel = '$nivel'");
    $res = $query->fetch(PDO::FETCH_ASSOC);
    $id_reg = @$res['id'];
    $totalReg = @count($res);
    if($totalReg > 0 and $id_reg != $id){
        echo "Este nivel já está cadastrado!";
        exit();
    }

    $query = $pdo->prepare("INSERT INTO niveis set nivel = :nivel");
            $query->bindValue(":nivel", $nivel); 
            $query->execute();
    echo 'Salvo com Sucesso!';
?>