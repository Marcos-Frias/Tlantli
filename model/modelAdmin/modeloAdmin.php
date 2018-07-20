<?php
	/**
	 * @author Marcos Felipe Frías Martínez
	 */
	class modelAdmin extends conexionBD {

		public function showGradoDB(){
			return $this->ConsultaNormal("SELECT * FROM grado");
		}

		public function showGrupoDB(){
			return $this->ConsultaNormal("SELECT * FROM grupo");
		}
		
		public function showCargoDB(){
			return $this->ConsultaNormal("SELECT * FROM cargo");
		}

		public function showGeneroDB(){
			return $this->ConsultaNormal("SELECT * FROM genero");
		}

		public function showMateriasDB(){
			return $this->ConsultaNormal("SELECT * FROM asignatura");
		}

		public function showDocentesDB(){
			return $this->ConsultaNormal("SELECT * FROM docente");
		}

		public function showPeriodoDB(){
			return $this->ConsultaNormal("SELECT * FROM periodoaca");
		}

		public function idDocenteDB($docente){
			$idDocente = $this->ConsultaPreparada("SELECT idDocente FROM docente WHERE concat_ws(' ', nombreDoc, aPartDoc, aMateDoc) LIKE '% ? %'",  array($docente));
			if ($idDocente) {
				return $idDocente[0];
			}else {
			   return "";
			}
		}

		public function idMateriaDB($materia){
			$idMateria = $this->ConsultaPreparada("SELECT idAsignatura from asignatura WHERE NomAsigatura = ?",  array($materia));
			if ($idMateria) {
				return $idMateria[0];
			}else {
			   return "";
			}
		}

		public function idPeriodoDB($periodo){
			$idPeriodo = $this->ConsultaPreparada("SELECT idPeriodoA FROM periodoaca WHERE concat_ws(' ', nomPeriodo, ano) LIKE '% ? %'", array($periodo));
			if ($idPeriodo) {
				return $idPeriodo[0];
			}else {
			   return "";
			}

		}

		public function insertUserDB($datos){
			$estado = $this->InsertarRegistrosPreparada("INSERT INTO usuario (nombre, aPaterno, aMaterno, telefono, NickName, password, idCargo, fechaReg) VALUES (?,?,?,?,?,?,?,CURRENT_TIMESTAMP)", $datos);
			return $estado; 
		}

		public function insertDocenteDB($datos){
			$estado = $this->InsertarRegistrosPreparada("INSERT INTO docente (matriculaDoc, nombreDoc, aPartDoc, aMateDoc, telefonoDoc) VALUES (?,?,?,?,?)", $datos);
			return $estado; 
		}

		public function insertMateriaDB($datos){
			$estado = $this->InsertarRegistrosPreparada("INSERT INTO asignatura (NomAsigatura, idGrado) VALUES (?,?)",$datos);
			return $estado;
		}

		public function insertAsignarMateriaDB($datos){
			$estado = $this->InsertarRegistrosPreparada("INSERT INTO asignaturadocente (idAsignatura, idDocente, idPeriodo) VALUES (?,?,?)",$datos);
			return $estado;
		}

		public function insertAlumnoDB($datos){
			$estado = $this->InsertarRegistrosPreparada("INSERT INTO alumno (IDGRADOAL, IDGRUPOAL, NOMBREAL, APATERNOAL, AMATERNOAL, MATRICULA, TELEFONOAL) VALUES (?,?,?,?,?,?,?)", $datos);
			return $estado;
		}

	}

 ?>
