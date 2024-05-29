<?php
// Conexão com o BD
require '../controllers/config.php';

//inicia a sessão do usuário
session_start();

//inicializa a variavel $nomeusuario
$name = '';

//verifica se o usuário está logado (if sessao def)
if (isset($_SESSION['user'])) {
    $name = $_SESSION['user'];
}
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <title>Aula_09 - PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="home.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pizza.php">PIZZA</a>
                </li>
            </ul>

            <!-- Adicionando espaço -->
            <div class="ms-auto me-3">
                <span class="text-light"><?php echo $name ?></span>
            </div>

            <!-- Adicionando dropdown para Perfil do Usuário e Logout -->
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Menu
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="../controllers/logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="mt-4 p-5 bg-secondary text-white rounded">
        <h1>Seja bem-vindo!</h1>
        <p>A melhor Pizza da região</p>
    </div>

</body>

</html>