<h1> Cadastro de Pessoa</h1>
<div class="container">
	<form method="post" action="?p=cadastrarPessoa" id="">
		<div class="row">
			<div class="col-25">
				<label for="name">Nome: </label>
			</div>
			<div class="col-75">
				<input type="text" name="name" id="name" required placeholder="Digite o Nome" onkeypress="return Onlychars(event)" onkeyup="c('name')" autocomplete="off">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="cpf">CPF: </label>
			</div>
			<div class="col-75">
				<input type="text" name="cpf" id="cpf" required placeholder="000.000.000-00" data-mask="000.000.000-00" maxlength="14" autocomplete="off">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="endereco">Endereço: </label>
			</div>
			<div class="col-75">
				<input type="text" name="endereco" id="endereco" required autocomplete="off">
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





