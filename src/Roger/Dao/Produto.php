<?php
	namespace Roger\Dao;

	use Roger\Dao\DAL;
	use Roger\Model\Produto as ProdutoModel;

	class Produto {
		
		/*
			* Cadastra o produto no BD
			* @param: Objeto Produto (model)
		*/
		public function cadastrar(ProdutoModel $produto){
			$sql = "INSERT INTO produto(nome, valor) VALUES (:nome, :valor)";
			$query = DAL::prepare($sql);
			$query->bindValue(":nome", $produto->getNome());
			$query->bindValue(":valor", (float)$produto->getValor());

			return $query->execute();
		}
	}
