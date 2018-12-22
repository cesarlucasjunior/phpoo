<?php
	class Pessoa {

		private $nome;
		private $idade;
		private $dataNascimento;
		private $sexo;


		//definição de construtores para instanciação automática. Lembrando que pode ser o nome da classe.
		//public function __construct($n, $i, $sx){
		//	$this->nome = $n;
		//	$this->idade = $i;
		//	//$this->dataNascimento = $dt;
		//	$this->sexo = $sx;
		//}

		//Definição dos métodos getter's e setter's da classe Pessoa.

		public function fazerAniversario($dataHoje){
				$this->idade ++;


			//if($dataHoje === $this->getDataNascimento()){
			//	return echo "Hoje é seu aniversário! Desejamos felicidades nessa nova primavera!";
			//} else {
			//	echo "Hoje é dia " . $dataHoje . " e não é seu aniversário!";
			//}
		}

		public function getSexo(){
			return $this->sexo;
		}

		public function setSexo($s){
			$this->sexo = $s;
		}

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