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

		public function insertUserDB($datos){
			$estado = $this->InsertarRegistrosPreparada("INSERT INTO usuario (nombre, aPaterno, aMaterno, telefono, NickName, password, idCargo, fechaReg) VALUES (?,?,?,?,?,?,?,CURRENT_TIMESTAMP)", $datos);
			return $estado; 
		}

	}

 ?>
