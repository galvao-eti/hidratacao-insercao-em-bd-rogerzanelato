<?php
	namespace Roger\Dao;

	use Roger\Dao\Dal;
	use Roger\Model\Usuario as UsuarioDao;

	class Usuario {

		/*
			* Cadastra o usuario no BD
			* @param: Objeto Usuario (model)
		*/
		public function cadastrar(UsuarioDao $user){
			$sql = "INSERT INTO usuario(email, senha) VALUES (:email, :senha)";
			$query = DAL::prepare($sql);
			$query->bindValue(":email", $user->getUsuario());
			$query->bindValue(":senha", $user->getSenha());

			return $query->execute();
		}
	}

