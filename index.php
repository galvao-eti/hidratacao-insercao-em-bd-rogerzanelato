<?php
	require('autoload.php');

	function pretty_dump($dump){
		echo "<pre>";
		var_dump($dump);
		echo "<pre>";
	}


	use Roger\Dao\DAL;
	use Roger\Model\Produto;
	use Roger\Model\Usuario;
	use Roger\Dao\Usuario as UsuarioDao;
	use Roger\Dao\Produto as ProdutoDao;

	// $query = DAL::getDb()->exec("DELETE FROM usuario");	
	// $query = DAL::getDb()->exec("DELETE FROM produto");
	
	$user = new Roger\Model\Usuario();
	
	/*
		* Array com os dados que serão carregados no objeto
	*/
	$arr = array(
		"usuario" => "rogerzanelato@gmail.com",
		"senha" => 1234,
		"x" => 141
	);
	echo "<h3>Usuário - Array </h3>";

	pretty_dump($arr);

	// Passando os dados do Array para o Objeto
	$user->hidratar($arr);

	echo "<h3>Usuário - Hidratado </h3>";
	pretty_dump($user);

	$dao = new UsuarioDao;

	// Cadastrando os dados do objeto no BD
	if($dao->cadastrar($user)){
		echo "<br>Usuarío cadastrado com sucesso.";
	}

	echo "<br><br><br>------------------------------------------------------------------------<br><br>";

	$product = new Roger\Model\Produto();

	echo "<h3>Produto - Array </h3>";

	$arr = array(
		"nome" => "Televisor de Plasma",
		"valor" => 10.09,
		"teste" => false
	);
	pretty_dump($arr);

	echo "<h3>Produto - Hidratado </h3>";
	$product->hidratar($arr);
	pretty_dump($product);

	$dao = new ProdutoDao;
	if($dao->cadastrar($product)){
		echo "<br>Produto cadastrado com sucesso.";
	}

?>