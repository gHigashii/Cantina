<?php
    // Conexão com o BD
    require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- External CSS -->
    <link rel="stylesheet" type="text/css" href="/cantina/assets/css/login.css" />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,700;1,200;1,400&display=swap" rel="stylesheet">


    <!-- Graphics -->
    
    <title>Login</title>    
</head>
<body>

    <div class="hero-img-login">
        <div class="forms-login">
            <form action="login.php" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Nome de Usuário:</label>
                    <input type="text" class="form-control" placeholder="User" name="user" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha:</label>
                    <input type="password" class="form-control" placeholder="Senha" name="pass" required>
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>