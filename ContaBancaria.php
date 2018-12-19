<?php

	class ContaBancaria{

		private $numeroConta;
		private $tipo;
		private $dono;
		private $saldo;
		private $status;

		public function __contruct(){
			$this->saldo = 0;
			$this-> status = false;
		}

		public function abrirConta($tipoConta){
			if($tipoConta === 'CP'){
				$this->tipo = $tipoConta;
				$this->status = true;
				$this->saldo += 150;
			} elseif ($tipoConta === 'CC'){
				$this->tipo = $tipoConta;
				$this->status = true;
				$this->saldo =+ 50;
			} else{
				echo "A conta solicitada não preenche o requisito solicitado -> {$this->getNumeroConta()}";
			}
		}

		public function fecharConta(){
			if($this->saldo > 0 || $this->saldo < 0){
				echo "A conta possui valor a pagar/recolher - Não é possível fechar a conta";
			} else {
				$this->status = false;
				echo "Conta finalizada com sucesso!";
			}
		}

		public function depositar($valorDeposito){
			if($this->status === true){
				$this->saldo += $valorDeposito;
				echo "Valor depositado com sucesso - R$" . $this->getSaldo() . "<br>";
			} else {
				echo "Sua conta encontra-se inativa, impossível realizar depósito.";
			}
		}

		public function sacar($valorSaque){
			if($this->status === true){
				if($this->saldo >= $valorSaque){
					$this->saldo -= $valorSaque;
					echo "Saque realizado com sucesso! Valor saque R$$valorSaque - Saldo total - R$" . $this->getSaldo() . "<br>";
				} else {
					echo "Você não possui o valor em conta para realizar esse saque!";
				}
			} else {
				echo "Sua contara encontra-se inativa, impossível realizar um saque.";
			}
		}

		public function pagarMensalidade(){
			if($this->tipo === "CC"){
				$this->saldo -= 12;
				echo "Saldo final - R$" . $this->getSaldo() . "<br>";
			} elseif ($this->tipo === "CP"){
				$this->saldo -=20;
				echo "Saldo final - R$" . $this->getSaldo() . "<br>";
			}
		}

		public function setNumeroConta($numConta){
			$this->numeroConta = $numConta;
		}

		public function getNumeroConta(){
			return $this->numeroConta;
		}


		public function setTipo($tipoConta){
			$this->tipo = $tipoConta;
		}	

		public function getTipo(){
			return $this->tipo;
		}

		public function setDono($dono){
			$this->dono = $dono;
		}	

		public function getDono(){
			return $this->dono;
		}	

		public function getSaldo(){
			return $this->saldo;
		}

		public function setStatus($status){
			$this->status = $status;
		}	

		public function getStatus(){
			return $this->status;
		}
	}
?>