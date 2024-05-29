<?php

require 'config.php';

if (isset ($_POST['']) && empty($_POST[''])
    isset ($_POST['']) && empty($_POST[''])
    isset ($_POST['']) && empty($_POST['']) == false){
        
    
    $ = addslashes($_POST['']);
    $ = addslashes($_POST['']);
    $ = addslashes($_POST['']);
    
        $sql = "INSERT INTO produtos SET ";
        $pdo = $pdo ->query($sql);
    
        echo 
            "
            <META HTTP-EQUIV=REFRESH CONTENT='0; URL=produtos.php'>
            <script type=\"text/javascript\">
                alert(\"Cadastrado com Sucesso! \");
            </script>
            "
    }
?>