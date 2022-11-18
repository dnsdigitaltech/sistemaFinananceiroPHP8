<?php 
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