<?php
	//Importando arquivo Caneta.php
	
	require_once 'Caneta.php';

	//Criando instância de Caneta, atribuindo alguns valores e utilizando alguns métodos.

	$c1 = new Caneta();

	$c1 -> modelo = "BIC";
	$c1 -> cor = "Azul";
	//$c1 -> ponta = 0.5;
	//$c1 -> tampada = true;

	//Método responsável por mostrar o estado de um objeto:
	$c1->tampar();
	print_r($c1);

	echo "<br>";

	//Criando outra instância de Caneta, atribuindo alguns valores e utilizando alguns métodos.

	/*$c2 = new Caneta();

	$c2 -> modelo = "PENTEL";
	$c2 -> cor = "Vermelha";
	$c2 -> ponta = 0.9;
	$c2 -> tampada = false;

	print_r($c2);*/ 
?>


<!--if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/dashboard/');
	exit;
-->