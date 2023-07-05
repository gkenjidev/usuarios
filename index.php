<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Pagina inicial</title>
</head>
<body>
    <div class = "container">
        <div class= "row justify-content-center">
            <div class="col-md-6">
                <h1 class="mt-5 mb-4">Login</h1>
                <form action="autenticar.php" method="POST">
                <div class="form-group">
                <label for="username">Usuário:</label>
                <input type="text" class="form-control" name="username" id="username"required>
                </div>

                <div class= "form-group">
                    <label for ="password">Senha:</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>

                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
            </div>
        </div>
    </div>
    <div class = "container">
        <div class= "row justify-content-center">
            <div class="col-md-6">
                <h1 class="mt-5 mb-4">Criar Usuário</h1>
                <form action="criar_user.php" method="POST">
                <div class="form-group">
                <label for="username">Usuário:</label>
                <input type="text" class="form-control" name="newUsername" id="newUsername"required>
                </div>

                <div class="form-group">
                <label for="username">Email:</label>
                <input type="text" class="form-control" name="email" id="email">
                </div>

                <div class= "form-group">
                    <label for ="password">Senha:</label>
                    <input type="password" class="form-control" name="newPassword" id="newPassword" required>
                </div>

                <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar" class="btn btn-primary">
            </form>
            </div>
        </div>
    </div>
</body>
</html>