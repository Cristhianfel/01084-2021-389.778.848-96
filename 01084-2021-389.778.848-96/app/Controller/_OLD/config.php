<?php

	session_start();
	date_default_timezone_set('America/Sao_Paulo');
	$url="/";
	
	require_once __DIR__ . '/bd.php';
	require_once __DIR__ . '/functions.php';
	
	

	if(isset($_GET['p'])){
		$value = $_GET['p'];
	}
	else
	{
		$value = NULL;
	}
	
?>