<?php

if ($value == 'pessoa'){ require_once __DIR__ . '/pessoa.php';}
if ($value == 'conta'){ require_once __DIR__ . '/conta.php';}
if ($value == 'movimentacao'){ require_once __DIR__ . '/movimentacao.php';}

//editPeople ($people, $conexao, $id);

$people = mysqli_query($conexao,"select * from pessoas") or die('Error: ' . mysqli_error($conexao));
while($dados=mysqli_fetch_assoc($people)){
	$idPeople = $dados['id'];
	if ($id == $idPeople){ require_once __DIR__ . '/editarPessoa.php';}
}

$account = mysqli_query($conexao,"select * from contas") or die('Error: ' . mysqli_error($conexao));
		while($dados=mysqli_fetch_assoc($account)){
			$idConta = $dados['id'];
	if ($id == $idConta){ require_once __DIR__ . '/editarConta.php';}
	
}


?>