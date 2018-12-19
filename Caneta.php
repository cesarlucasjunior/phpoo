<?php
	class Caneta{

		public $modelo;
		public $cor;
		private $ponta;
		private $carga;
		protected $tampada;

		public function rabiscar(){
			if($this->tampada === true){
				echo "<p>ERRO! Não posso rabiscar pois a caneta está tampada!</p>";
			} else {
				echo "<p>Estou rabiscando...</p>";
			}
		}

		public function tampar(){
			$this->tampada = true;
		}

		public function destampar(){
			$this->tampada = false;

		}
	}

?>