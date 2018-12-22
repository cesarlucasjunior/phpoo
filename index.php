<pre>
<?php
	require_once 'Pessoa.php';
	require_once 'Livro.php';


	$p[0] = new Pessoa("Pedro", 18, 'M');
	$p[1] = new Pessoa("Fernanda", 27, 'M');


	$l[0] = new Livro("Java OCA", "César Júnior", 350, $p[0]);
	$l[1] = new Livro("Certificação PHP", "César Júnior", 120, $p[1]);

	$l[0]->folhear(80);
	$l[0]->avancarPagina();
	$l[0]->avancarPagina();
	$l[0]->voltarPagina();
	$l[0]->voltarPagina();
	$l[0]->detalhes();


	$l[1]->detalhes();

?>
</pre>




	<!--

		require_once 'Lutador.php';
	require_once 'Luta.php';

	$l = array();
	
	$l[0] = new Lutador("Pretty Boy", "Francês", 30, 1.75, 68.9, 11, 2, 1);
	$l[1] = new Lutador("Putscript", "Brasileiro", 29, 1.68, 57.8, 14, 2, 3);
	$l[2] = new Lutador("SnapShadow", "Norte Americano", 35, 1.65, 80.9, 12, 2, 1);
	$l[3] = new Lutador("Dead Code", "Australiano", 28, 1.93, 81.6, 13, 0, 2);
	$l[4] = new Lutador("UFOCobol", "Brasileiro", 37, 1.70, 119.3, 5, 4, 3);
	$l[5] = new Lutador("Nerdaart", "Norte Americano", 30, 1.81, 105.7, 12, 2, 4);

	//for($i=0; $i < count($l); $i++){
	//	echo $l[$i]->apresentar();
	//}

	$luta = new Luta();
	$luta->marcarLuta($l[1], $l[0]);
	$luta->lutar();

	echo "-----------------------------------FIM DE LUTA-----------------------------------";
	$l[0]->status();
	$l[1]->status();

	



		$c = new ControleRemoto();
		$c->ligar();
		$c->maisVolume();
		$c->abrirMenu();
		require_once 'ContaBancaria.php';
		
		$c1 = new ContaBancaria(); //Júnior
		$c1->abrirConta('CP');
		$c1->setDono("César Júnior");
		$c1->setNumeroConta("11111");
		$c1->depositar(100);
		$c1->pagarMensalidade();





		$c2 = new ContaBancaria(); //Marcela
		$c2->abrirConta('CC');
		$c2->setDono("Marcela");
		$c2->setNumeroConta("22222");
		$c2->depositar(50);
		$c2->sacar(50);
		$c2->pagarMensalidade();

		print_r($c1);
		print_r($c2);

	-->	

<!-- Importando arquivo Caneta.php
	
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
	-->





<!--if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/dashboard/');
	exit;
-->