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

		public function showGeneroDB(){
			return $this->ConsultaNormal("SELECT * FROM genero");
		}


	}

 ?>
