<?php

	include_once "conexion.php";
	/**
	 *
	 */
	class Datos extends conexionDB{

		#REGISTRO DE USUARIOS
		public function loginUserModel($datos,$table){
			# :: => Operador de resolución de ambito
			$stmt = Conexion::conectar()->prepare();

			#bindParam => Vinvila una variable PHP a un parametro.
			$stmt->bindParam("nickname",$datosController["nickname"], PDO::PARAM_STR);
			$stmt->bindParam("password",$datosController["password"], PDO::PARAM_STR);

			if($stmt->execute()){
				return "Bien";
			}else{
				return "Error";
			}
		}


	}






 ?>
