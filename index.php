<?php session_start();
	
	require_once('autoload.php');
	require_once('config/config.php');
	require_once('views/loyout/header.php');
	require_once('views/loyout/main.php');

	if (isset($_GET['controller'])) {
		$name_controller = $_GET['controller'].'Controller'; 
	}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
		$name_controller = CONTROLLER_DEFAULT;
	}else{
		echo "no existe pagina";
	}

	if (class_exists($name_controller)) {
		$controller = new $name_controller();

		if (isset($_GET['action']) && method_exists($controller, $_GET['action'])) {
			$action = $_GET['action'];
			$controller->$action();
		}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
			$action_default = ACTION_DEFAULT;
			$controller->$action_default();
		}else{
			echo "no existe pagina";
		}
	}


	require_once('views/loyout/footer.php');

?>