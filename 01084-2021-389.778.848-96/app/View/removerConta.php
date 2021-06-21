<?php
	$account = mysqli_query($conexao,"select * from contas WHERE id=$rm") or die('Error: ' . mysqli_error($conexao));
	$dados=mysqli_fetch_assoc($account);
	$idConta = $dados['id'];
	
	echo "

ok
";
?>