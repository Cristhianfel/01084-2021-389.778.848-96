<?php

	function formatar_cpf_cnpj($doc) {
 
        $doc = preg_replace("/[^0-9]/", "", $doc);
        $qtd = strlen($doc);
 
        if($qtd >= 11) {
 
            if($qtd === 11 ) {
 
                $docFormatado = substr($doc, 0, 3) . '.' .
                                substr($doc, 3, 3) . '.' .
                                substr($doc, 6, 3) . '.' .
                                substr($doc, 9, 2);
            } else {
                $docFormatado = substr($doc, 0, 2) . '.' .
                                substr($doc, 2, 3) . '.' .
                                substr($doc, 5, 3) . '/' .
                                substr($doc, 8, 4) . '-' .
                                substr($doc, -2);
            }
 
            return $docFormatado;
 
        } else {
            return 'Documento invalido';
        }
    }
	function teste($people, $conexao){
		$people = mysqli_query($conexao,"select * from pessoas") or die('Error: ' . mysqli_error($conexao));
		while($dados=mysqli_fetch_assoc($people)){
			$namePeople = $dados['nome'];
			$cpfPeople = $dados['cpf'];
			$addressPeople = $dados['endereco'];
			
			echo"
			<tr>
		<td>{$namePeople}</td>
			<td>".formatar_cpf_cnpj($cpfPeople)."</td>
			<td>{$addressPeople}</td>
			<td>x</td>
			<td>x</td>
		</tr>
 ";
		}
	}
	
?>