<?php
	class Lutador{
		private $nome;
		private $nacionalidade;
		private $idade;
		private $altura;
		private $peso;
		private $categoria;
		private $vitorias;
		private $derrotas;
		private $empates;


		//Definição do construtor:

		public function __construct($no, $na, $id, $al, $ps, $vi, $dr, $em){

			$this->nome = $no;
			$this->nacionalidade = $na;
			$this->idade = $id;
			$this->altura = $al;
			$this->setPeso($ps);
			$this->vitorias = $vi;
			$this->derrotas = $dr;
			$this->empates = $em;
		}



		public function getNome(){
			return $this->nome;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getNacionalidade(){
			return $this->nacionalidade;
		}

		public function setNacionalidade($nacionalidade){
			$this->nacionalidade = $nacionalidade;
		}

		public function getIdade(){
			return $this->idade;
		}

		public function setIdade($idade){
			$this->idade = $idade;
		}

		public function getAltura(){
			return $this->altura;
		}

		public function setAltura($altura){
			$this->altura = $altura;
		}

		public function getPeso(){
			return $this->peso;
		}

		public function setPeso($peso){
			$this->peso = $peso;
			$this->setCategoria();
		}

		public function getCategoria(){
			return $this->categoria;
		}

		public function setCategoria(){
			if($this->peso < 52.2){
				$this->categoria = "Inválido";
			} else if ($this->peso < 70.3){
				$this->categoria = "Leve";
			} else if ($this->peso < 83.9){
				$this->categoria = "Médio";
			} else if ($this->peso <= 120.2){
				$this->categoria = "Pesado"
			} else {
				$this->categoria = "Inválido";
			}


			$this->categoria = $categoria;
		}

		public function getVitorias(){
			return $this->vitorias;
		}

		public function setVitorias($vitorias){
			$this->vitorias = $vitorias;
		}

		public function getEmpates(){
			return $this->empates;
		}

		public function setEmpates($empates){
			$this->empates = $empates;
		}

		public function getDerrotas(){
			return $this->derrotas;
		}

		public function setDerrotas($derrotas){
			$this->derrotas = $derrotas;
		}

		public function apresentar(){
			echo "Lutador: " . $this->getNome();
			echo "Origem: " . $this->getNacionalidade();
			echo "Idade: " . $this->getIdade() . " anos";
			echo "Altura: " . $this->getAltura() . " metros";
			echo "Pesando: " . $this->getPeso() . " Kg";
			echo "Ganhou: " . $this->getVitorias() . " lutas";
			echo "Perdei: " . $this->getDerrotas() . " lutas";
			echo "Empatou: " . $this->getEmpates() . " lutas";

		}

		public function status(){
			echo $this->getNome() . "<br>";
			echo "é um peso " . $this->getCategoria() . "<br>";
			echo "com " . $this->getVitorias() . " vitorias";
			echo " e " . $this->getDerrotas() . " derrotas";
			echo " e " . $this->getEmpates() . " empates";
		}

		public function ganharLuta(){
			$this->setVitorias($this->getVitorias() + 1);
		}

		public function perderLuta(){
			$this->setDerrotas($this->getDerrotas() + 1);
		}

		public function empatarLuta(){
			$this->setEmpates($this->getEmpates() + 1);
		}
	}
?>