<h1> Cadastro de Movimentação</h1>
<div class="container">
	<form method="post" action="?p=cadastrarMovimento" id="">
		<div class="row">
			<div class="col-25">
				<label for="pessoa">Pessoa: </label>
			</div>
			<div class="col-75">
				<select name="pessoa" id="pessoa" required>
				<option value="">Escolha a Pessoa</option>
					<?php listPeopleAccount($people, $conexao);?>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="conta">Número da Conta: </label>
			</div>
			<div class="col-75">
				<select name="conta" id="conta"required>
					<option value="">Escolha a Conta</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="valor">Valor: </label>
			</div>
			<div class="col-75">
				<input type="text" name="valor" id="valor" required data-mask="000000000000000" maxlength="15" autocomplete="off">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="acao">Depositar/Retirar: </label>
			</div>
			<div class="col-75">
				<select name="acao" id="acao">
					<option value="1">Depositar</option>
					<option value="2">Retirar</option>
				</select>
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
		<th>Data</th>
		<th>Valor</th>
	</tr>
	<?php listMovimento($movimento, $conexao, $teste);?>
</table>
<p>Saldo: R$ 1000,00</p>
<?php //listBalance($account, $conexao);?>
<script type="text/javascript">
		$(function(){
			$('#pessoa').change(function(){
				if( $(this).val() ) {
					$('#conta').hide();
					$.getJSON('Models/listaContasUser.php?search=',{pessoa: $(this).val(), ajax: 'true'}, function(j){
						var options = '<option value="">Escolha Conta</option>';	
						for (var i = 0; i < j.length; i++) {
							options += 
								'<option value="' + j[i].id + '">' + j[i].conta + ' - Saldo R$ ' + j[i].saldo + '</option>'
							;
						}	
						$('#conta').html(options).show();
					});
				} else {
					$('#conta').html('<option value="">Escolha Conta</option>');
				}
			});
		});
		

		</script>


