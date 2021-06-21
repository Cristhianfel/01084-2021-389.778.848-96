<?php

	if(isset($_POST['name'])){
        $namePeople = $_POST['name'];
    }
    else
    {
        $namePeople = NULL;
    }
	if(isset($_POST['cpf'])){
        $cpfPeople = $_POST['cpf'];
		$cpfPeople = preg_replace('/[^0-9]/', '', $cpfPeople);
    }
    else
    {
        $cpfPeople = NULL;
    }
	if(isset($_POST['endereco'])){
        $addressPeople = $_POST['endereco'];
    }
    else
    {
        $addressPeople = NULL;
    }
	
	$sqlPeople="INSERT INTO pessoas (nome, cpf, endereco) VALUES ('$namePeople', '$cpfPeople', '$addressPeople')";
        
	// CASO ESTEJA TUDO OK ADICIONA OS DADOS, SENAO MOSTRA O ERRO
	if (!mysqli_query($conexao,$sqlPeople))
	{
		die('Error: ' . mysqli_error($conexao));
	}
	else{
		echo"<script>location.href='./?p=pessoa';</script>";
	}

?>