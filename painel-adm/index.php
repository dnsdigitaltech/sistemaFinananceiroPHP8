<?php 
    @session_start();
    require_once("../conexao.php"); 
    require_once("verificar.php");
    //RECUPERAR DADOS DO USUÁRIO
    $idUusuario = $_SESSION['idUsuaro'];
    $query = $pdo->query("SELECT * FROM usuarios WHERE id = $idUusuario");
    $res = $query->fetch(PDO::FETCH_ASSOC);
    $nomeUsario     = $res['nome'];
    $emailUsario    = $res['email'];
    $senhaUsario    = $res['senha'];
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title><?=$nomeSistema?></title>
        <link href="../img/icone.ico" rel="shortcut icon" type="image/x-icon">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="./"><img class="profile-img" src="../img/logo.png" width=40 alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cadastros
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#"><?=$_SESSION['nomeUsuaro']?></a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="../../logout.php">Sair</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Perfil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#"><?=$_SESSION['nomeUsuaro']?></a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="../../logout.php">Sair</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-flex mr-4">
                    <img src="../img/user.png" class="img-profile rounded-circle" alt="Usuário" width="40px" height="40px"> 
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?=@$nomeUsario?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a href="" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalPerfil">Editar Dados
                                    <li><a class="dropdown-item" href="../logout.php">Sair</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
        </nav>
    </body>
</html>

<!-- Modal Perfil-->
<div class="modal fade" id="modalPerfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Dados</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" value="<?=$nomeUsario?>" placeholder="Nome">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="<?=$emailUsario?>" placeholder="E-mail">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="text" name="senha" class="form-control" id="senha" value="<?=$senhaUsario?>" placeholder="Senha">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Editar</button>
      </div>
    </div>
  </div>
</div>