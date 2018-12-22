<?php
	require_once 'Pessoa.php';

	class Professor extends Pessoa{

		private $especialidade;
		private $salario;

		public function setEspecialidade($esp){
			$this->especialidade = $esp;
		}

		public function getEspecialidade(){
			return $this->especialidade;	
		}

		public function setSalario($sal){
			$this->salario = $sal;
		}

		public function getSalario(){
			return $this->salario;
		}

		public function receberAumento($valor){
			$this->salario += $valor;
		}

	}
?>