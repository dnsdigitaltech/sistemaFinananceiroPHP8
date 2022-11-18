<?php 
    require_once("conexao.php"); 
    //CRIAR USUÁRIO ADMIN CASO ELE NÃO EXISTA
    $query = $pdo->query("SELECT * FROM usuarios WHERE nivel = 'Administrador'");
    $res = $query->fetchAll(PDO::FETCH_ASSOC);
    $totalReg = @count($res);
    if($totalReg == 0){
        $pdo->query("INSERT INTO usuarios SET nome = '$nomeAdmin', email = '$emailAdmin', senha= '12345678', nivel = 'Administrador'");
    }   
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title><?=$nomeSistema?></title>
        <link href="img/icone.ico" rel="shortcut icon" type="image/x-icon">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <link href="css/estilo-login.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class="container">
            <div class="row">
                <div class="account-wall">
                    <img class="profile-img" src="./img/logo.png"
                        alt="">
                    <form class="form-signin" method="POST" action="atenticar.php">
                    <input type="email" class="form-control mb-2" placeholder="E-mail" required autofocus>
                    <input type="password" class="form-control mb-2" placeholder="Senha" required>
                    <div class="d-grid gap-2 mt-3"> 
                        <button class="btn btn-primary" type="submit"> Entrar</button>      
                    </div>                  
                    </form>
                </div>
            </div>
        </div>

    
    </body>
</html>