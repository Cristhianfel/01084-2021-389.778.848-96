<?php

	function listAccount($account, $conexao){
		$account = mysqli_query($conexao,"select * from contas") or die('Error: ' . mysqli_error($conexao));
		while($dados=mysqli_fetch_assoc($account)){
			$idConta = $dados['id'];
			$idPeople = $dados['id_pessoa'];
			$numberAccount = $dados['conta'];
			
			$people = mysqli_query($conexao,"select * from pessoas WHERE id = $idPeople") or die('Error: ' . mysqli_error($conexao));
			$dadosPeople = mysqli_fetch_assoc($people);
			$namePeople = $dadosPeople['nome'];
			$cpfPeople = $dadosPeople['cpf'];
			
			echo"
				<tr>
					<td>{$namePeople}</td>
					<td>{$cpfPeople}</td>
					<td>{$numberAccount}</td>
					<td><a href='?p=editarConta&id={$idConta}'>x</a></td>
					<td>
						<button onclick='funcao1()'>Excluir</button>

						<script>
						function funcao1(){
						var x;
						var r=confirm('Tem Certeza que deseja Remover!');
						if (r==true)
						  {
						  location.href='./?p=removerConta&rmbd={$idConta}';
						  }
						else
						  {
						  location.href='./?p=conta';
						  }
						document.getElementById('demo').innerHTML=x; 
						}
						</script>
					</td>
				</tr>
			";
		}
	}
	
	function listBalance($account, $conexao){
		$account = mysqli_query($conexao,"select * from contas") or die('Error: ' . mysqli_error($conexao));
		while($dados=mysqli_fetch_assoc($account)){
			$idPeople = $dados['id_pessoa'];
			$saldoAccount = $dados['saldo'];
			
			echo"<p>Saldo: R$ ".number_format($saldoAccount, 2, ',', '')."</p>";
		}
	}
	
?>