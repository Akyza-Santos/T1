<?php

	if(!file_exists('cidades.xml')){
		
        $fp = fopen("cidades.xml","a");                    
        $conteudo = '<?xml version = "1.0"?><cidades></cidades>';
        fwrite($fp, $conteudo);
        fclose($fp);
		
    }
	
	$arquivo = 'cidades.xml';
    $xml = simplexml_load_file($arquivo);
	
	$posicao = sizeof($xml->cidade);
	
	$xml->cidade[$posicao]->sigla_estado = $_POST["estado"];
    $xml->cidade[$posicao]->nome_cidade = $_POST["nome_cidade"];
	$xml->cidade[$posicao]->cidade_estado = $_POST["nome_cidade"] . "/" . $_POST["estado"];

    $xml->asXML($arquivo);
	
	header("location: form_cidade.php");

?>