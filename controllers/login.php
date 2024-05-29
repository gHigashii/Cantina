<?php 
session_start();

require 'config.php';

if(isset($_POST['user']) && !empty($_POST['user']) && isset ($_POST['pass']) && !empty($_POST['pass'])){
    $user = addslashes($_POST['user']);
    $senha = (addslashes($_POST['pass']));

    $sql = $pdo->query("SELECT * FROM `users` WHERE user = '$user' AND senha = '$senha' ");
        if($sql->rowCount() > 0){
            $dado = $sql->fetch();
            $_SESSION['id'] = $dado['id'];
            $_SESSION['user'] = $dado['user'];
            header("Location: ../views/home.php");
            exit();
        } else {
            echo
                "
                <META HTTP-EQUIV=REFRESH CONTENT='0; URL=index.php'>
                <script type=\"text/javascript\">
                    alert(\"Erro: Login ou senha incorreto!\");
                </script>
                ";
            exit();
        }
}

?>