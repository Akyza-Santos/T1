<?php
	include("cabecalho.php");
?>

<html>

	<body>
	
		<form method = "post" action = "cadastrar_estado.php">
			
			<h3>Selecione a sigla e o nome do estado em que você vive:</h3>
			
			<label>Sigla: <label>
			<select name = "sigla">
			
				<option>AC</option>
				<option>AL</option>
				<option>AP</option>
				<option>AM</option>
				<option>BA</option>
				<option>CE</option>
				<option>DF</option>
				<option>ES</option>
				<option>GO</option>
				<option>MA</option>
				<option>MT</option>
				<option>MS</option>
				<option>MG</option>
				<option>PA</option>
				<option>PB</option>
				<option>PR</option>
				<option>PE</option>
				<option>PI</option>
				<option>RJ</option>
				<option>RN</option>
				<option>RS</option>
				<option>RO</option>
				<option>RR</option>
				<option>SC</option>
				<option>SP</option>
				<option>SE</option>
				<option>TO</option>
			
			</select>
			
			<br />
			
			<label>Nome Estado: </label>
			<select name = "nome_estado">
			
				<option>Acre</option>
				<option>Alagoas</option>
				<option>Amapá</option>
				<option>Amazonas</option>
				<option>Bahia</option>
				<option>Ceará</option>
				<option>Distrito Federal</option>
				<option>Espírito Santo</option>
				<option>Goiás</option>
				<option>Maranhão</option>
				<option>Mato Grosso</option>
				<option>Mato Grosso do Sul</option>
				<option>Minas Gerais</option>
				<option>Pará</option>
				<option>Paraíba</option>
				<option>Paraná</option>
				<option>Pernambuco</option>
				<option>Piauí</option>
				<option>Rio de Janeiro</option>
				<option>Rio Grande do Norte</option>
				<option>Rio Grande do Sul</option>
				<option>Rondônia</option>
				<option>Roraima</option>
				<option>Santa Catarina</option>
				<option>São Paulo</option>
				<option>Sergipe</option>
				<option>Tocantins</option>
			
			</select>
			
			<br />
			
			<input type = "submit" value = "Enviar" />
	
		</form>
		
	</body>
	
</html>