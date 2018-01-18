
<?php
		/**
		 *
		 
		class Controller{

			public function inicio(){
				include "Views/user-login.php";
			}

			#REGISTRO DE USUARIOS
			public function loginUserController(){
				$datosCon = array('nickname' =>$_POST["nickname"], "password" => $_POST["password"]);
				$respuesta = Datos::loginUserModel($datosCon, "");
			}


			#REGISTRO DE ALUMNOS
			public function creatUserController(){

				$datosCon = array('nombre'=>$_POST["nameAl"],'aPaterno'=>$_POST["aPatAl"],'aMaterno'=>$_POST["aMatAl"],'phone'=>$_POST["phoneAl"],'grado'=>$_POST["gradoAl"] ,'grupo'=>$_POST["grupoAl"]);
				$respuesta = Datos::creatUserModel($datosCon,"usuario");
			}

		}
*/

 ?>
