
<?php

class controller {

	private $modelGeneral;

	function __construct(){
		/*$this->modelGeneral = new modeloGeneral();*/
	}

	public function isSesion() {
		return (isset($_SESSION["doctor"]) );
	}

	public function auntentificacion() {
		if (isset($_POST["usuario"]) && isset($_POST["password"])) {
				return $this->validarAcceso($_POST["usuario"], $_POST["password"]);
		}
		return "";
	}

	public function validarAcceso($username, $password) {
		$username = filter_var($username, FILTER_SANITIZE_STRING);
		$password = filter_var($password, FILTER_SANITIZE_STRING);
		$user = $this->modeloDoc->consultarUsuario($username, $password);
		if (!$user) {
				return $this->mensaje("Error de contraseña y/o privilegios ");
		} else {
						$_SESSION["doctor"] = $doctor[0];
		}
		return $this->mensaje("Inicio correcto", 1);
	}

	public function redireccion($url) {
		header("Location: " . $url);
	}

	public function mensaje($mensaje, $type = 0) {
		if ($type == 0) {
			return '<div class="alert alert-danger"><i class="fa fa-times-circle fa-fw fa-lg"></i><b>' . $mensaje . '</b></div>';
		}
		return '<div class="alert alert-success"><i class="fa fa-check-circle fa-fw fa-lg"></i><b>' . $mensaje . '</b></div>';
	}

	public function inicio(){
		include "Views/user-login.php";
	}
}

 ?>
