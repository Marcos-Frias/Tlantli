<?php

	class modeloGeneral extends conexionBD{

		public function checkUser($username, $password, $cargo) {
			return $this->ConsultaPreparada("SELECT * FROM usuario WHERE NickName=? AND password=? AND idCargo=?", array($username, $password, $cargo));
	}
		
	}

 ?>
