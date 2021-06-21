<?php

	if(isset($_POST['id'])){
        $idConta = $_POST['id'];
    }
    else
    {
        $idConta = NULL;
    }
	if(isset($_POST['pessoa'])){
        $idPeople = $_POST['pessoa'];
    }
    else
    {
        $idPeople = NULL;
    }
	if(isset($_POST['conta'])){
        $numberAccount = $_POST['conta'];
    }
    else
    {
        $numberAccount = NULL;
    }
	
	$accountsql = mysqli_query($conexao,"select * from contas WHERE conta = $numberAccount") or die('Error: ' . mysqli_error($conexao));
	$row_accountsql = mysqli_fetch_assoc($accountsql);
    $totalRows_accountsql = mysqli_num_rows($accountsql);
	
	
	if ($totalRows_accountsql > 0) {
	   echo "Não deu certo, conta já está em uso.";

	}
	else{
	
		$updateAccount = "UPDATE contas SET 
			id_pessoa = '$idPeople',
			conta = '$numberAccount'
			WHERE id = '$idConta'  
		";

		// CASO ESTEJA TUDO OK ADICIONA OS DADOS, SENAO MOSTRA O ERRO
		if (!mysqli_query($conexao,$updateAccount))
		{
			die('Error: ' . mysqli_error($conexao));
		}
		else{
			echo"<script>location.href='./?p=conta';</script>";
		}
	}
?>