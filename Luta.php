<?php
	require_once 'Lutador.php';
	class Luta{
		private $desafiado;
		private $desafiante;
		private $rounds;
		private $aprovado;

		public function marcarLuta($l1, $l2){
			if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
				$this->aprovado = true;
				$this->desafiado = $l1;
				$this->desafiante = $l2;
			} else {
				echo "Luta não autorizada!";
				$this->aprovado = false;
				$this->desafiado = null;
				$this->desafiante = null;
			}
		}

		public function lutar(){
			if($this->aprovado){
				$this->desafiado->apresentar();
				echo "<br>";
				$this->desafiante->apresentar();
				echo "<br>";
				$vencedor = rand(0,2);

				switch ($vencedor) {
					case 0:
						echo "Luta deu empate";
						$this->desafiante->empatarLuta();
						$this->desafiado->empatarLuta();
						break;

					case 1:
						echo $this->desafiante->getNome() . " venceu!";
						$this->desafiante->ganharLuta();
						$this->desafiado->perderLuta();					
						break;
					case 2:
						echo $this->desafiado->getNome() . " venceu!";
						$this->desafiante->perderLuta();
						$this->desafiado->ganharLuta();	
						break;
				}
			}else{
				echo "A luta não foi autorizada!";
			}

		}

		public function setDesafiado($de){
			$this->desafiado = $de;
		}

		public function getVolume(){
			return $this->desafiado;
		}

		public function setDesadiante($des){
			$this->desafiante = $des;
		}

		public function getDesafiante(){
			return $this->desafiante;
		}

		public function setRounds($round){
			$this->rounds = $round;
		}

		public function getRound(){
			return $this->rounds;
		}

		public function setAprovado($aprovado){
			$this->aprovado = $aprovado;
		}

		public function getAprovado(){
			return $this->aprovado;
		}





	}


?>