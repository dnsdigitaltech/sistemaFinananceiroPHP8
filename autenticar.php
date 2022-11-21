<?php 
    @session_start();
    require_once("conexao.php"); 

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
            $query->bindValue(":email", $email);
            $query->bindValue(":senha", $senha);
            $query->execute();
    $res = $query->fetchAll(PDO::FETCH_ASSOC);
    $totalReg = count($res);
    if($totalReg > 0){
        $nivel = $res[0]['nivel'];

        //VARIAVEIS DE SESSÃO
        $_SESSION['nivelUsuaro']    = $res[0]['nivel'];
        $_SESSION['nomeUsuaro']     = $res[0]['nome'];
        $_SESSION['idUsuaro']       = $res[0]['id'];


        if($nivel == 'Administrador'){
            echo "
                <script>
                    window.location='painel-adm'
                </script>";
        }
    }else{
        echo "
                <script>
                    alert('Dados Incorretos!')
                    window.location='./'
                </script>";
    }
?>