<?php
	class Alquiler extends Conexion{

		private $id;
		private $id_ejemplar;
		private $id_cliente;
		private $fecha_alquiler;
		private $fecha_devolucion;
		private $conexion;

		public function __construct(){
			$this->conexion = new Conexion();
			$this->conexion = $this->conexion->getConexion();
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getId(){
			return $this->id;
		}

		public function setIdEjemplar($id_ejemplar){
			$this->id_ejemplar = $id_ejemplar;
		}

		public function getIdEjemplar(){
			return $this->id_ejemplar;
		}

		public function setFechaAlquiler($fecha_alquiler){
			$this->fecha_alquiler = $fecha_alquiler;
		}

		public function getFechaAlquiler(){
			return $this->fecha_alquiler;
		}

		public function setFechaDevolucion($fecha_devolucion){
			$this->fecha_devolucion = $fecha_devolucion;
		}

		public function getFechaDevolucion(){
			return $this->fecha_devolucion;
		}

		//consulto todas las peliculas con su respectivo id y titulo
		public function getAll(){
			$sql = "SELECT a.id_ejemplar,e.id, p.titulo, e.id_pelicula FROM alquiler a 
			INNER JOIN ejemplares e ON e.id = a.id_ejemplar
			INNER JOIN peliculas p On p.id = e.id_pelicula";
			$consul = $this->conexion->prepare($sql);
			$consul->execute();
			$resul = $consul->fetchAll(PDO::FETCH_OBJ);
			return $resul;    
		}
		//consulto todos los usuarios con su respectivo id
		public function getAllClientes(){
			$sql = "SELECT a.id_cliente, c.id, c.nombre, c.apellido FROM alquiler a
			INNER JOIN clientes c ON c.id = a.id_cliente";
			$consul = $this->conexion->prepare($sql);
			$consul->execute();
			$resul = $consul->fetchAll(PDO::FETCH_OBJ);
			return $resul;
		}


	}

?>