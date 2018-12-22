<?php

	require_once 'Publicacao.php';
	require_once 'Pessoa.php';
	class Livro implements Publicacao{

		private $titulo;
		private $autor;
		private $totalPaginas;
		private $paginaAtual;
		private $aberto;
		private $leitor; //Esse leitor será uma pessoa.

		public function __construct($t, $a, $tp, $l){
			$this->titulo = $t;
			$this->autor = $a;
			$this->totalPaginas = $tp;
			$this->leitor = $l;
			$this->paginaAtual = 0;
			$this->aberto = false;
		}


		public function abrir(){
			$this->aberto = true;
		}
		
		public function fechar(){
			$this->aberto = false;	
		}

		public function folhear($p){
			if($p > $this->totalPaginas){
				$this->paginaAtual = 0;
			}else{
				$this->paginaAtual = $p;
			}

		}

		public function avancarPagina(){
			$this->paginaAtual++;
		}

		public function voltarPagina(){
			$this->paginaAtual--;
		}



		public function detalhes(){
			echo "<hr> Livro: " . $this->titulo . " escrito por " . $this->autor;
			echo "<br> Páginas: " . $this->totalPaginas . " Pagina atual: " . $this->paginaAtual;
			echo "<br> Sendo lido por: " . $this->leitor->getNome();
		}



	}
?>