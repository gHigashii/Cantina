<?php
// declara o BD
$dsn = "mysql:host=localhost;dbname=cantina";
// declara o user do BD
$dbuser = "root";
// declara a senha para o BD
$dbpass = "";

// controle de excessão
try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);
	
	} catch (PDOException $e) {
		echo "Falha ao conectar a base de dados!";
}

?>
