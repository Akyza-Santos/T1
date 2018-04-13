<?php

	if(!file_exists('cadastro.xml')){
		
        $fp = fopen("cadastro.xml","a");                    
        $conteudo = '<?xml version = "1.0"?><cadastros></cadastros>';
        fwrite($fp, $conteudo);
        fclose($fp);
		
    }
	
	$arquivo = 'cadastro.xml';
    $xml = simplexml_load_file($arquivo);
	
	$posicao = sizeof($xml->cadastro);
	
	$xml->cadastro[$posicao]->nome = $_POST["nome"];
    $xml->cadastro[$posicao]->email = $_POST["email"];
	$xml->cadastro[$posicao]->sexo = $_POST["sexo"];
	$xml->cadastro[$posicao]->cidade_estado = $_POST["cidade_estado"];

    $xml->asXML($arquivo);
	
	header("location: form_cadastro.php");

?>