<?php
	$people = mysqli_query($conexao,"select * from pessoas WHERE id = $id") or die('Error: ' . mysqli_error($conexao));
	$dados=mysqli_fetch_assoc($people);
	$idPeople = $dados['id'];
	$namePeople = $dados['nome'];
	$cpfPeople = $dados['cpf'];
	$addressPeople = $dados['endereco'];
?>

<h1> Editar de Pessoa</h1>
<div class="container">
	<form method="post" action="?p=editarPessoaBD" id="">
		<input type="text" value="<?=$idPeople?>" name="id" id="name" required readonly autocomplete="off" style="display:none;">
		<div class="row">
			<div class="col-25">
				<label for="name">Nome: </label>
			</div>
			<div class="col-75">
				<input type="text" value="<?=$namePeople?>" name="name" id="name" required placeholder="Digite o Nome" onkeypress="return Onlychars(event)" onkeyup="c('name')" autocomplete="off">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="cpf">CPF: </label>
			</div>
			<div class="col-75">
				<input type="text" value="<?=$cpfPeople?>" name="cpf" id="cpf" required placeholder="000.000.000-00" data-mask="000.000.000-00" maxlength="14" autocomplete="off">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="endereco">Endereço: </label>
			</div>
			<div class="col-75">
				<input type="text" value="<?=$addressPeople?>" name="endereco" id="endereco" required autocomplete="off">
			</div>
		</div>
		<div class="row">
			<center>
				<button type="submit" class="">Salvar</button>
			</center>		
		</div>
	</form>
</div>
<br><br>

<table width="100%">
	<tr>
		<th>Nome</th>
		<th>CPF</th>
		<th>Endereço</th>
		<th>Editar</th>
		<th>Remover</th>
	</tr>
	<?php
		listPeople($people, $conexao);
	?>
</table>