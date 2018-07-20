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

	public function showMaterias(){
		$materia = "";
		$materias = $this-> modeloAdmin->showMateriasDB();
		foreach ($materias as $materiasBD) {
			$materia .= '<option value="'.$materiasBD["idAsignatura"].'">'.$materiasBD["NomAsigatura"].'</option>';
		}
		return '
		<div  id="input-select">
			<div class="input-field col s12 m3 12">
				<label>MATERIAS:</label>
				<select name="materia">
					<option value="" disabled selected>SELEC. LA MATERIA</option>
					'.$materia.'
				</select>
			</div>
		</div>';
	}

	public function showDocentes(){
		$docente = "";
		$docentes = $this-> modeloAdmin->showDocentesDB();
		foreach ($docentes as $docentesBD) {
			$docente .= '<option value="'.$docentesBD["idDocente"].'">'.$docentesBD["nombreDoc"].' '.$docentesBD["aPartDoc"].' '.$docentesBD["aMateDoc"].'</option>';
		}
		return '
		<div  id="input-select">
			<div class="input-field col s12 m3 12">
				<label>DOCENTE:</label>
				<select name="docente">
					<option value="" disabled selected>SELEC. EL DOCENTE</option>
					'.$docente.'
				</select>
			</div>
		</div>';
	}

	public function showPeriodo(){
		$periodo = "";
		$year = "";
		$periodos = $this-> modeloAdmin->showPeriodoDB();
		foreach ($periodos as $periodosBD) {
			$periodo .= '<option value="'.$periodosBD["idPeriodoA"].'">'.$periodosBD["nomPeriodo"].' '.$periodosBD["ano"].'</option>';
		}
		return '
		<div  id="input-select">
			<div class="input-field col s12 m3 12">
				<label>PERIODO ACAD.:</label>
				<select name="periodoAcad">
					<option value="" disabled selected>SELEC. EL PERIODO ACAD.</option>
					'.$periodo.'
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

	public function insertDocente(){
		if( isset($_POST["nameDoc"]) && isset($_POST["matriculaDoc"]) ){
			$datosDoctor = array( $_POST["matriculaDoc"], $_POST["nameDoc"], $_POST["aPaternoDoc"], $_POST["aMaternoDoc"],  $_POST["phoneDoc"]  );
			$query = $this->modeloAdmin->insertDocenteDB($datosDoctor);
			if($query == TRUE){
				echo '<script language="javascript">alert("El docente se registro con exito");</script>';
				//header("location: ViewRegDoc.php");
			}else{
				echo '<script language="javascript">alert("El docente no se pudo registrar");</script>';
			}
		}else{

		}
	}

	public function insertMateria(){
		if( isset($_POST["nameMateria"]) && isset($_POST["grado"]) ){
			$datosMateria = array($_POST["nameMateria"], $_POST["grado"]);
			$query = $this->modeloAdmin->insertMateriaDB($datosMateria);
			if($query == TRUE){
				//header("location: ViewRegMat.php");
				echo '<script language="javascript">alert("La materia se registro con exito");</script>';
			}else{
				echo '<script language="javascript">alert("La materia no se pudo registrar");</script>';
			}
		}else{

		}
	}

	public function asignarMateria(){

		if( isset($_POST["docente"]) && isset($_POST["materia"]) && isset($_POST["periodoAcad"])  ){
			$docente = $this->modeloAdmin->idDocenteDB($_POST["docente"]);
			$materia = $this->modeloAdmin->idMateriaDB($_POST["materia"]);
			$periodo = $this->modeloAdmin->idPeriodoDB($_POST["periodoAcad"]);
			if($docente != ""  and $materia != "" and $periodo != ""){
				var_dump("Entre antes de insertar");
				$datos = array($docente["idDocente"] ,$materia["idAsignatura"] , $periodo["idPeriodoA"] );
				$query = $this->modeloAdmin->insertAsignarMateriaDB($datos);
				if($query == TRUE){
					//header("location: ViewRegMat.php");
					echo '<script language="javascript">alert("Se asigno '.$_POST["materia"].'al docente '.$_POST["docente"].'");</script>';
				}else{
					echo '<script language="javascript">alert("La materia no se pudo asignar");</script>';
				}
			}else{
				var_dump("No entro antes de insertar");
			}

		}else{

		}
	}

	public function insertAlumno(){
		
		if (isset($_POST["nameAlumno"]) && isset($_POST["matriculaAlumno"]) ) {
			$datosAlumno = array($_POST["grado"], $_POST["grupo"],$_POST["nameAlumno"], $_POST["apaternoAlumno"], $_POST["amaternoAlumno"],$_POST["matriculaAlumno"] ,$_POST["phoneAlumno"]);
			$query = $this->modeloAdmin->insertAlumnoDB($datosAlumno);
 			if ($query == TRUE) {
				#header("location: ViewRegAlum.php");
				echo '<script language="javascript">alert("Alumno registrado con exito");</script>'; 
 			}else {
 				echo '<script language="javascript">alert("Alumno no registrado");</script>';
 			}
		}else {
			
		}
	}



}


?>
