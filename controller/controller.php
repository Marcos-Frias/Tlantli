
<?php

class controller {

	private $model;

	function __construct(){
		$this->model = new Model();
	}


	public function showCargoUser(){
		$cargo = "";
		$cargos = $this->modelGeneral->showCargoUserDB();
		foreach ($cargos as $cargoBD) {
			$cargo .= '<option value="'.$cargoBD["idCargo"].'">'.$cargoBD["NomCargo"].'</option>';
		}
		return '
		<div  id="input-select">
			<div class="input-field col s12 ">
				<label>CARGO:</label>
				<select name="cargoUser">
					<option value="" disabled selected>SELEC. EL CARGO</option>
					'.$cargo.'
				</select>
			</div>
		</div>';
	}

	public function isSesion() {
		if (isset($_POST["nickname"]) && isset($_POST["password"])) {
			$idCargo = $this->modelGeneral->consultarCargoUsuario($_POST["cargoUser"]);
			if($idCargo == 1){
				return (isset($_SESSION["administrador"]) );
			}elseif ($idCargo == 2) {
				return (isset($_SESSION["archivo"]) );
			}elseif ($idCargo == 3) {
				return (isset($_SESSION["caja"]) );
			}elseif ($idCargo == 4) {
				return (isset($_SESSION["ceye"]) );
			}else {
				return (isset($_SESSION["clinica"]) );
			}
		}
	}

	public function auntentificacion() {
		if (isset($_POST["nickname"]) && isset($_POST["password"])) {
				return $this->validarAcceso($_POST["nickname"], $_POST["password"], $_POST["password"]);
		}
		return "";
	}

	public function validarAcceso($username, $password, $cargo) {
		$username = filter_var($username, FILTER_SANITIZE_STRING);
		$password = filter_var($password, FILTER_SANITIZE_STRING);
		$user = $this->modelGeneral->checkUser($username, $password, $cargo);
		if (!$user) {
			return $this->mensaje("Error de contraseña y/o privilegios ");
		} else {
			$_SESSION["doctor"] = $doctor[0];
		}
		return $this->mensaje("Inicio correcto", 1);
	}

	public function redireccion($url) {
		if($idCargo == 1){
			header("Location: " . $url);
		}elseif ($idCargo == 2) {
			header("Location: " . $url);
		}elseif ($idCargo == 3) {
			header("Location: " . $url);
		}elseif ($idCargo == 4) {
			header("Location: " . $url);
		}else {
			header("Location: " . $url);
		}
		header("Location: " . $url);
	}

	public function mensaje($mensaje, $type = 0) {
		if ($type == 0) {
			return '<div class="alert alert-danger"><i class="fa fa-times-circle fa-fw fa-lg"></i><b>' . $mensaje . '</b></div>';
		}
		return '<div class="alert alert-success"><i class="fa fa-check-circle fa-fw fa-lg"></i><b>' . $mensaje . '</b></div>';
	}

	public function inicio(){
		include "view/user-login.php";
	}
}

 ?>
