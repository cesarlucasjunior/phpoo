<?php
	//Importando arquivo Caneta.php
	
	require_once 'Caneta.php';
	require_once 'Pessoa.php';

	//Criando instância de Caneta, atribuindo alguns valores e utilizando alguns métodos.

	$c1 = new Caneta();

	$c1->setModelo("PENCIL");
	$c1->setCor("Preta");

	echo "O modelo da caneta é {$c1->getModelo()} e a cor é {$c1->getCor()}";
	//$c1 -> ponta = 0.5;
	//$c1 -> tampada = true;

	//Método responsável por mostrar o estado de um objeto:
	echo "<br>";
	print_r($c1);

	echo "<br>";


	$p1 = new Pessoa("César Júnior", 25, "01/10/1993");
	$p1->setNome("César Lucas Júnior");
	echo "Usuário: {$p1->getNome()}";


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