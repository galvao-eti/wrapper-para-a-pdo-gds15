<?php //declare(strict_types = 1);
namespace Turma3;

	class Base {

		public $dbh;
		public function __construct($config)


		{
			$this->conectar($config->dsn, $config->usuario, $config->senha);
		}	


		public function conectar($dsn, $usuario, $senha){
			$this->dbh = new \PDO($dsn, $usuario, $senha);
		}


		public function preparar($sql){
			return $sth = $this->dbh->prepare($sql);
		}


		public function desconectar(){
			$this->dbh = NULL;
		}
	}