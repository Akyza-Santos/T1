<?php

	include("cabecalho.php");
	
	echo "<h3>Estados</h3>";
	
	if(!file_exists('estados.xml')){
		
		echo "Ainda nao ha elementos cadastrados.<br />";
		
	}else{
	
		echo "
			
			<table border = '1'>
			
				<tr>
				
					<th>Sigla</th>
					<th>Nome</th>
				
				</tr>
				
		";
		
		$xml = simplexml_load_file('estados.xml');
		foreach($xml->estado as $estado){
			
			echo "
			
				<tr>
				
					<td>$estado->sigla</td>
					<td>$estado->nome</td>
				
				</tr>
			
			";
			
		}
		
		echo "
		
			</table>
			
		";
		
	}
	
	echo "<h3>Cidades</h3>";
	
	if(!file_exists('cidades.xml')){
		
		echo "Ainda nao ha elementos cadastrados.<br />";
		
	}else{
		
		echo "
			
			<table border = '1'>
			
				<tr>
				
					<th>Nome</th>
					<th>Sigla Estado</th>
				
				</tr>
				
		";
		
		$xml = simplexml_load_file('cidades.xml');
		foreach($xml->cidade as $cidade){
				
			echo "

				<tr>
				
					<td>$cidade->nome_cidade</td>
					<td>$cidade->sigla_estado</td>
				
				</tr>
				
			";
				
		}
		
		echo "
			
			</table>
			
		";
		
	}
	
	echo "<h3>Cadastros</h3>";
	
	if(!file_exists('cadastro.xml')){
		
		echo "Ainda nao ha elementos cadastrados.<br />";
		
	}else{
		
		echo "
			
			<table border = '1'>
			
				<tr>
				
					<th>Nome</th>
					<th>Email</th>
					<th>Sexo</th>
					<th>Cidade/Estado</th>
				
				</tr>
				
		";
		
		$xml = simplexml_load_file('cadastro.xml');
		foreach($xml->cadastro as $cadastro){
			
			echo "
			
				<tr>
				
					<td>$cadastro->nome</td>
					<td>$cadastro->email</td>
					<td>$cadastro->sexo</td>
					<td>$cadastro->cidade_estado</td>
				
				</tr>
			
			";
			
		}
		
		echo "
			
			</table>
			
		";
		
	}

?>