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
				<select>
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
				<select>
					<option value="" disabled selected>SELEC. EL GRUPO</option>
					'.$grupo.'
				</select>
			</div>
		</div>';
	}

	public function insertAlumno(){
		$pacienteInf = $this->modeloDoc->mostrarPaciente($_GET["paciente"]);
		$doctorInf = $this->modeloDoc->pacienteDoctor($pacienteInf["Doctor_idDoctor"]);
		ini_set('date.timezone','America/Mexico_City');
		$date = date('Y-m-d H:i:s', time());

		 if (isset($_GET["paciente"]) && isset($_POST["apreNota"]) ) {
			 $datosNota = array($date, $_POST["subNota"], $_POST["objeNota"], $_POST["apreNota"], $_POST["planNota"], $doctorInf["idDoctor"],$pacienteInf["idPaciente"],$pacienteInf["Hospital_idHospital"]);
			 $query = $this->modeloDoc-> insertNotaMedica($datosNota);
 			if ($query == TRUE) {
 				header("location: pacientes.php");
 			}else {
 				echo '<script language="javascript">alert("Nota médica no guardada");</script>';
 			}
		}else {

		}
	}




}


?>
