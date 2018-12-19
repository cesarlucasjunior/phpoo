<?php
	class Pessoa {

		private $nome;
		private $idade;
		private $dataNascimento;


		//definição de construtores para instanciação automática. Lembrando que pode ser o nome da classe.
		public function __construct($n, $i, $dt){
			$this->nome = $n;
			$this->idade = $i;
			$this->dataNascimento = $dt;
		}

		//Definição dos métodos getter's e setter's da classe Pessoa.
		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setIdade($idade){
			$this->idade = $idade;
		}

		public function getIdade(){
			return $this->idade;
		}

		public function setDataNascimento($dataNascimento){
			$this->dataNascimento = $dataNascimento;
		}

		public function getDataNascimento(){
			return $this->dataNascimento;
		}	
	}
?>