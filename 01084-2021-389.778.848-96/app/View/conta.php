<h1> Cadastro de Conta</h1>
<div class="container">
	<form method="post" action="?p=cadastrarConta" id="">
		<div class="row">
			<div class="col-25">
				<label for="pessoa">Pessoa: </label>
			</div>
			<div class="col-75">
				<select name="pessoa" id="pessoa">
					<?php listPeopleAccount($people, $conexao);?>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="conta">Número da Conta: </label>
			</div>
			<div class="col-75">
				<input type="text" name="conta" id="conta" required data-mask="000000000000000" maxlength="15" autocomplete="off">
			</div>
		</div>
		<div class="row">
			<center>
				<button type="submit" class="">Salvar</button>
			</center>		
		</div>
	</form>
</div>
<br>

<table width="100%">
	<tr>
		<th>Nome</th>
		<th>CPF</th>
		<th>Número da conta</th>
		<th>Editar</th>
		<th>Remover</th>
	</tr>
	<?php
		listAccount($account, $conexao);
	?>
</table>