<?php

	echo $rmbd;
	
	$sqldelconta="DELETE FROM contas WHERE id = $rmbd";
	if (!mysqli_query($conexao,$sqldelconta)){ 
		echo 'removido';
	}
	else{
		die('Error: ' . mysqli_error($conexao));
	}
	
?>