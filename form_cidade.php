<?php
	include("cabecalho.php");
?>

<html>

	<body>
	
		<form method = "post" action = "cadastrar_cidade.php">
		
			<h3>Selecione o estado e a cidade em que você vive: </h3>
			
			<label>Estado: </label>
			<select name = "estado">
			
<?php
			$xml = simplexml_load_file('estados.xml');
			
			foreach($xml->estado as $estado){
?>
		
				<option><?= $estado->sigla; ?></option>
			
<?php
			}
?>

			</select>
			
			<br />
			
			<label>Nome Cidade: <label>
			<select name = "nome_cidade">
	
				<option>Araraquara</option>
				<option>São Paulo</option>
				<option>Belo Horizonte</option>
				<option>Juiz de Fora</option>
				<option>Salvador</option>
				<option>Porto Seguro</option>
				<option>Palmas</option>
				<option>Rio de Janeiro</option>
				<option>Brasília</option>
				<option>Angra dos Reis</option>
				<option>Cabo Frio</option>
			
			</select>
			
			<br />
			
			<input type = "submit" value = "Enviar" />
			
		</form>
	
	</body>

</html>