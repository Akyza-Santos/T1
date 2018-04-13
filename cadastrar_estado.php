<?php

	if(!file_exists('estados.xml')){
		
        $fp = fopen("estados.xml","a");                    
        $conteudo = '<?xml version = "1.0"?><estados></estados>';
        fwrite($fp, $conteudo);
        fclose($fp);
		
    }
	
	$arquivo = 'estados.xml';
    $xml = simplexml_load_file($arquivo);
	
	$posicao = sizeof($xml->estado);
	
	$xml->estado[$posicao]->sigla = $_POST["sigla"];
    $xml->estado[$posicao]->nome = $_POST["nome_estado"];

    $xml->asXML($arquivo);
	
	header("location: form_estado.php");

?>