<?php 
header('Content-type: application/json');
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

	$pessoa = $_REQUEST['pessoa'];
	//$pessoa = 1;
	
	$result_conta = "SELECT * FROM contas WHERE id_pessoa=$pessoa ORDER BY id";
	$resultado_conta = mysqli_query($conexao, $result_conta);
	
	while ($row_conta = mysqli_fetch_assoc($resultado_conta) ) {
		$conta_post[] = array(
			'id'	=> $row_conta['id'],
			'conta' => utf8_encode($row_conta['conta']),
			'saldo' => number_format($row_conta['saldo'], 2, ',', ''),
		);
	}
	
	echo(json_encode($conta_post));
	
