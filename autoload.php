<?php
	require_once('config/config.php');
	require_once('libraries/conexion.php');
	

	spl_autoload_register(function($clase){

		require_once('controllers/'.$clase.'.php');

	});

	
	

	



?>