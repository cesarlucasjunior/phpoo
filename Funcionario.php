<?php
	require_once 'Pessoa.php';
	
	class Funcionario extends Pessoa{

		private $setor;
		private $trabalhando;

		public function mudarTrabalho(){
			$this->trabalhando = ! $this->trabalhando;
		}

		public function setSetor($s){
			$this->setor = $s;
		}

		public function getSetor(){
			return $this->setor;
		}

		public function setTrabalhando($status){
			$this->trabalhando = $status;
		}

		public function getTrabalhando(){
			return $this->trabalhando;
		}
	}
?>