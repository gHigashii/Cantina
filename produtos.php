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
    <div class="container">
        <div class="show-prods">
            <div class="row">
                <div class="title-prod"></div>
            </div>
            <div class="row">
                <?php
                    $sql = "SELECT * FROM produtos";

                    $sql = $pdo->query($sql);

                    if($sql->rowCount() > 0){
                        foreach ($sql->fetchall() as $produtos){
                            echo '<div class="col-md-4">';
                                echo '<div class="card" style="width: 18rem;">';
                                    echo '<img src="'. $produtos['url'] .'"class="card-img-top">';
                                        echo '<div class="card-body">';
                                            echo '<h5 class="card-title">'.$produtos ['nome_prod'].'</h5>';
                                        echo '</div>';
                                    echo '<ul class="list-group list-group-flush">';
                                        echo '<li class="list-group-item"> '.$produtos ['categoria_id'].' </li>';
                                    echo '</ul>';
                                    echo '<div class="card-body">';
                                        echo '<p>'.$produtos ['preco_prod'].'</p>'
                                        echo '<a href="venda.php" class="card-link">'. "Comprar" .'</a>';   
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>