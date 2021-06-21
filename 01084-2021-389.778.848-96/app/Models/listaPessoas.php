<?php

	function listPeople($people, $conexao){
		$people = mysqli_query($conexao,"select * from pessoas") or die('Error: ' . mysqli_error($conexao));
		while($dados=mysqli_fetch_assoc($people)){
			$idPeople = $dados['id'];
			$namePeople = $dados['nome'];
			$cpfPeople = $dados['cpf'];
			$addressPeople = $dados['endereco'];
			
			echo"
				<tr>
					<td>{$namePeople}</td>
					<td>".formatar_cpf_cnpj($cpfPeople)."</td>
					<td>{$addressPeople}</td>
					<td><a href='?p=editarPessoa&id={$idPeople}'>x</a></td>
					<td>x</td>
					</tr>
			 ";
		}
	}
	
	function listPeopleAccount($people, $conexao){
		$people = mysqli_query($conexao,"select * from pessoas") or die('Error: ' . mysqli_error($conexao));
		while($dados=mysqli_fetch_assoc($people)){
			$idPeople = $dados['id'];
			$namePeople = $dados['nome'];
			$cpfPeople = $dados['cpf'];
			echo"
				<option value='{$idPeople}'>{$namePeople} - ".formatar_cpf_cnpj($cpfPeople)."</option>
			";
		}
	}
	
	function listPeopleAccountEdit($people, $conexao, $id){
		$people = mysqli_query($conexao,"select * from pessoas") or die('Error: ' . mysqli_error($conexao));
		while($dados=mysqli_fetch_assoc($people)){
			$idPeople = $dados['id'];
			$namePeople = $dados['nome'];
			$cpfPeople = $dados['cpf'];
			
			$account = mysqli_query($conexao,"select * from contas WHERE id=$id") or die('Error: ' . mysqli_error($conexao));
			$dados=mysqli_fetch_assoc($account);
			$idConta = $dados['id'];
			$idContaPessoa = $dados['id_pessoa'];
			
			if($idPeople == $idContaPessoa){
			  echo"<option selected value='{$idPeople}'>{$namePeople} - ".formatar_cpf_cnpj($cpfPeople)."</option>";
			}else{
				echo"<option value='{$idPeople}'>{$namePeople} - ".formatar_cpf_cnpj($cpfPeople)."</option>";
			}
		}
	}
/*	
	function editPeople ($people, $conexao, $id){
		$people = mysqli_query($conexao,"select * from pessoas") or die('Error: ' . mysqli_error($conexao));
		while($dados=mysqli_fetch_assoc($people)){
			$idPeople = $dados['id'];
			if ($id == $idPeople){ require_once __DIR__ . '/editarPessoa.php';}
		}
	}
	*/
?>