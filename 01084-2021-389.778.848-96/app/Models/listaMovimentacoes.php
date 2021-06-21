<?php

	function listMovimento($movimento, $conexao, $teste){

		
		$movimento = mysqli_query($conexao,"select * from movimentacao") or die('Error: ' . mysqli_error($conexao));
		while($dados=mysqli_fetch_assoc($movimento)){
			$idMovimento = $dados['id'];
			$idContaMovimento = $dados['id_conta'];
			$dataMovimentacao = date_create($dados['data']);
			$valorMovimentacao = (float)$dados['movimentacao'];
			
			$valor = $valorMovimentacao;
			if($valor<0){
			  $color="red";
			}else{
			  $color=null;
			}
			
			echo"
				<tr>
					<td>".date_format($dataMovimentacao, 'd/m/Y H:i:s')."</td>
					<td  style='color:".$color."'>{$valorMovimentacao}</td>
				</tr>
			 "; 
		}
	}

?>