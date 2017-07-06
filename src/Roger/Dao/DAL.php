<?php	
    namespace Roger\Dao;

    require_once("config.php");

    class DAL{
        private static $con;

        public static function getDb(){
            if(!isset(self::$con)){

			    try {
				    self::$con = new \PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASSWORD);
				    self::$con->setAttribute( \PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
				    self::$con->setAttribute( \PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
			    } catch (\PDOException $e) {
				    echo $e->getMessage();
			    }

		    }

		    return self::$con;
        }

        public static function prepare($sql){
		    return self::getDb()->prepare($sql);
	    }

    }

    // $query = DAL::prepare("INSERT INTO usuario(email, senha) VALUES ('teste4', 'teste')");
    // $query->execute();

    // $query = DAL::prepare("SELECT * FROM usuario");
    // $query->execute();
    // $dados = $query->fetchAll(\PDO::FETCH_OBJ);
    // print_r($dados);
?>