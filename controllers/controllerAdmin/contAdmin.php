<?php

/**
 *
 */
class controllerAdmin {

	private $modeloAdmin;

	function __construct(){
		$this-> modeloAdmin = new modelAdmin();
	}

	public function showGrado(){
		$grado = "";
		$grados = $this-> modeloAdmin->showGradoDB();
		foreach ($grados as $gradoBD) {
			$grado .= '<option value="'.$gradoBD["idGrado"].'">'.$gradoBD["NomGrado"].'</option>';
		}
		return '
		<div  id="input-select">
			<div class="input-field col s12 m3 12">
				<label>GRADO:</label>
				<select name="grado">
					<option value="" disabled selected>SELEC. EL GRADO</option>
					'.$grado.'
				</select>
			</div>
		</div>';
	}

	public function showGrupo(){
		$grupo = "";
		$grupos = $this-> modeloAdmin->showGrupoDB();
		foreach ($grupos as $grupoBD) {
			$grupo .= '<option value="'.$grupoBD["idGrupo"].'">'.$grupoBD["NomGrupo"].'</option>';
		}
		return '
		<div  id="input-select">
			<div class="input-field col s12 m3 12">
				<label>GRUPO:</label>
				<select name="grupo">
					<option value="" disabled selected>SELEC. EL GRUPO</option>
					'.$grupo.'
				</select>
			</div>
		</div>';
	}

	public function showCargo(){
		$cargo = "";
		$cargos = $this-> modeloAdmin->showCargoDB();
		foreach ($cargos as $cargoBD) {
			$cargo .= '<option value="'.$cargoBD["idCargo"].'">'.$cargoBD["NomCargo"].'</option>';
		}
		return '
		<div  id="input-select">
			<div class="input-field col s12 m3 12">
				<label>CARGO:</label>
				<select name="cargo">
					<option value="" disabled selected>SELEC. EL CARGO</option>
					'.$cargo.'
				</select>
			</div>
		</div>';
	}

	public function insertUser(){
		
		if (isset($_POST["nickName"]) && isset($_POST["pass"]) ) {
			$datosUser = array($_POST["nameUser"], $_POST["aPaterno"], $_POST["aMaterno"],$_POST["phone"] ,$_POST["nickName"], $_POST["pass"], $_POST["cargo"]);
			$query = $this->modeloAdmin->insertUserDB($datosUser);
 			if ($query == TRUE) {
				header("location: ViewRegUser.php");
				echo '<script language="javascript">alert("Usuario registrado con exito");</script>'; 
 			}else {
 				echo '<script language="javascript">alert("Usuario no registrado");</script>';
 			}
		}else {
			
		}
	}

	public function insertMateria(){
		if( isset($_POST["nameMateria"]) && isset($_POST["grado"]) ){
			$datosMateria = array($_POST["nameMateria"]) && isset($_POST["grado"]);
			$query = $this->modeloAdmin->insertMateriaDB($datosMateria);
			if($query == TRUE){
				header("location: ViewRegMat.php");
				echo '<script language="javascript">alert("La materia se registro con exito");</script>';
			}else{
				echo '<script language="javascript">alert("La materia no se pudo registrar");</script>';
			}
		}else{

		}
	}

	public function asignarMateria(){
		if( isset($_POST["nameMateria"]) && isset($_POST["grado"]) ){
			$datosMateria = array($_POST["nameMateria"]) && isset($_POST["grado"]);
			$query = $this->modeloAdmin->insertMateriaDB($datosMateria);
			if($query == TRUE){
				header("location: ViewRegMat.php");
				echo '<script language="javascript">alert("La materia se registro con exito");</script>';
			}else{
				echo '<script language="javascript">alert("La materia no se pudo registrar");</script>';
			}
		}else{
			
		}
	}



}


?>
