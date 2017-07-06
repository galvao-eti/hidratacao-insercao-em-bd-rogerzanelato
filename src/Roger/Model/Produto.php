<?php
	namespace Roger\Model;

	class Produto {
		private $idproduto;
		private $nome;
		private $valor;

		public function getIdproduto(){
			return $this->idproduto;
		}

		public function setIdproduto($idproduto){
			$this->idproduto = $idproduto;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getValor(){
			return $this->valor;
		}

		public function setValor($valor){
			$this->valor = $valor;
		}

		// Trait de hidratação
		use Hidrata;

	}