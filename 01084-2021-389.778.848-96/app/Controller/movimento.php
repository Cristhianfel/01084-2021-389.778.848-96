<?php

	if(isset($_POST['pessoa'])){
        $idPeople = $_POST['pessoa'];
    }
    else
    {
        $idPeople = NULL;
    }
	if(isset($_POST['conta'])){
        $idAccount = $_POST['conta'];
    }
    else
    {
        $idAccount = NULL;
    }
	if(isset($_POST['valor'])){
        $value = $_POST['valor'];
    }
    else
    {
        $value = NULL;
    }
	if(isset($_POST['acao'])){
        $acao = $_POST['acao'];
    }
    else
    {
        $acao = NULL;
    }
	
	
	
	$account = mysqli_query($conexao,"select * from contas WHERE id=$idAccount") or die('Error: ' . mysqli_error($conexao));
	$dados=mysqli_fetch_assoc($account);
	$idPeople = $dados['id_pessoa'];
	$saldoAccount = $dados['saldo'];
        
	// CASO ESTEJA TUDO OK ADICIONA OS DADOS, SENAO MOSTRA O ERRO
	
		//echo"<script>location.href='./?p=pessoa';</script>";
		if($acao == 1){
				
			$saldoAccount = $saldoAccount + $value;
			
			$updateAccount = "UPDATE contas SET 
				saldo = '$saldoAccount'
				WHERE id = '$idAccount'  
			";
		
			// CASO ESTEJA TUDO OK ADICIONA OS DADOS, SENAO MOSTRA O ERRO
			if (!mysqli_query($conexao,$updateAccount))
			{
				die('Error: ' . mysqli_error($conexao));
			}
			else{
				echo"<p>Saldo: R$ ".number_format($saldoAccount, 2, ',', '')."</p>";
				$sqlMovimentacao="INSERT INTO movimentacao (id_conta, data, movimentacao) VALUES ('$idAccount', '$date', '$value')";
				if (!mysqli_query($conexao,$sqlMovimentacao)){
					die('Error: ' . mysqli_error($conexao));
				}
				else{
					echo"<p>Saldo: R$ ".number_format($saldoAccount, 2, ',', '')."</p>";
				}
			}
		}
		else{
			if($saldoAccount >= $value){
				$saldoAccount = $saldoAccount - $value;
				
				$updateAccount = "UPDATE contas SET 
					saldo = '$saldoAccount'
					WHERE id = '$idAccount'  
				";
				// CASO ESTEJA TUDO OK ADICIONA OS DADOS, SENAO MOSTRA O ERRO
				if (!mysqli_query($conexao,$updateAccount))
				{
					die('Error: ' . mysqli_error($conexao));
				}
				else{
					$sqlMovimentacao="INSERT INTO movimentacao (id_conta, data, movimentacao) VALUES ('$idAccount', '$date', '-$value')";
					if (!mysqli_query($conexao,$sqlMovimentacao)){
						die('Error: ' . mysqli_error($conexao));
					}
					else{
						echo"<p>Saldo: R$ ".number_format($saldoAccount, 2, ',', '')."</p>";
					}
				}
			}
			else{
				echo 'Não Possui Saldo';
			}	
		}