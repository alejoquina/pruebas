<?php 

	class Conexion{

		private $conexion;

		public function __construct(){
			$conne = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";DB_CHAR";
			try{
				$this->conexion = new PDO($conne,DB_USER,DB_PASS);
			}catch(PDOException $e){
				$this->conexion = "error de conexion";
				echo "error de conexion".$e->getMessage();
			}
		}


		public function getConexion(){
			return $this->conexion;
		} 


	}

	

?>