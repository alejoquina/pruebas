<?php

	class alquilerController{
		private $modelo;

		public function __construct(){
			require_once('models/alquiler.php');
			$this->modelo = new Alquiler();
		}

		public function index(){
			$peliculas = $this->modelo->getAll();
			$clientes = $this->modelo->getAllClientes();
			require_once('views/alquilar/index.php');
		}

		public function save(){
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$id_ejemplar = isset($_POST['id_ejemplar']) ? $_POST['id_ejemplar']: false; 
				$id_cliente  = isset($_POST['id_cliente']) ? $_POST['id_cliente']: false;
				$fecha_ingreso  = isset($_POST['fecha_ingreso']) ? $_POST['fecha_ingreso']: false;
				$fecha_devolucion = isset($_POST['fecha_devolucion']) ? $_POST['fecha_devolucion']: false;

				if ($fecha_devolucion < $fecha_ingreso)  {
					
				}
			}
		}


	}

?>