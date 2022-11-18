<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Acessar Sistema</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="css/estilo-login.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="account-wall">
                        <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                            alt="">
                        <form class="form-signin" method="POST" action="atenticar.php">
                        <input type="email" class="form-control" placeholder="E-mail" required autofocus>
                        <input type="password" class="form-control" placeholder="Senha" required>
                        <button class="btn btn-lg btn-primary btn-block" type="submit"> Entrar</button>                        
                        </form>
                    </div>
                </div>
            </div>
        </div>

    
    </body>
</html>