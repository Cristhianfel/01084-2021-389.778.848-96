<?php

$dbuser = $_ENV['MYSQL_USER'];
	$dbpass = $_ENV['MYSQL_PASS'];
	
	// constantes com as credenciais de acesso ao banco MySQL
	define('DB_HOST', 'mysql');
	define('DB_USER', $dbuser);
	define('DB_PASS', $dbpass);
	define('DB_NAME', 'ist');
	
	// mysqli  
	$conexao = mysqli_connect(DB_HOST,DB_USER,DB_PASS);
	$banco = mysqli_select_db($conexao,DB_NAME);
	mysqli_set_charset($conexao,'utf8');
	
?>