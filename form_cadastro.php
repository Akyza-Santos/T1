<?php
	include("cabecalho.php");
?>

<html>

	<body>
	
		<form method = "post" action = "registra_cadastro.php">
		
			<br />
		
			<label>Nome: </label>
			<input type = "text" name = "nome" />
			
			<br />
			
			<label>Email: </label>
			<input type = "email" name = "email" />
			
			<br />
			
			<label>Sexo: </label>
			<input type = "radio" name = "sexo" value = "F" />F
			<input type = "radio" name = "sexo" value = "M" />M
			
			<br />
			
			<label>Cidade/Estado: </label>
			<select name = "cidade_estado">
			
<?php
			$xml = simplexml_load_file('cidades.xml');
			
			foreach($xml->cidade as $cidade){
?>
		
				<option><?= $cidade->cidade_estado; ?></option>
			
<?php
			}
?>			
			</select>
			
			<br />
			
			<input type = "submit" value = "Enviar" />
		
		</form>
	
	</body>

</html>