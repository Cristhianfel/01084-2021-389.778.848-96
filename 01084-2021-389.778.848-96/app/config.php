<?php

	session_start();
	date_default_timezone_set('America/Sao_Paulo');
	$date = date('Y-m-d H:i:s');
	$url="/";
	
	require_once __DIR__ . '/bd.php';
	
	include_once __DIR__ . '/Models/formatarCPF.php';
	include_once __DIR__ . '/Models/listaPessoas.php';
	include_once __DIR__ . '/Models/listaContas.php';
	include_once __DIR__ . '/Models/listaMovimentacoes.php';
	
	

	if(isset($_GET['p'])){
		$value = $_GET['p'];
	}
	else
	{
		$value = NULL;
	}
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}
	else
	{
		$id = NULL;
	}
	if(isset($_GET['rm'])){
		$rm = $_GET['rm'];
	}
	else
	{
		$rm = NULL;
	}
	if(isset($_GET['rmbd'])){
		$rmbd = $_GET['rmbd'];
	}
	else
	{
		$rmbd = NULL;
	}
	
?>