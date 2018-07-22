<?php
	include_once "../../model/ConexionDataBase.php";
	include_once "../../model/estructura/estructura.php";
	include_once "../../model/modelAdmin/modeloAdmin.php";
	include_once "../../controller/controllerAdmin/contAdmin.php";
	$estructura = new estructuraGeneral();
	$estructuraAdmin = new estructuraAdmin();
	$administrador = new controllerAdmin();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-tap-highlight" content="no">
		<meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
		<meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
		<title>Registros</title>

		<!-- Favicons-->
		<link rel="icon" href="../../assets/images/favicon/estoma.png" sizes="32x32">
		<!-- Favicons-->
		<link rel="apple-touch-icon-precomposed" href="../../assets/images/favicon/apple-touch-icon-152x152.png">
		<!-- For iPhone -->
		<meta name="msapplication-TileColor" content="#00bcd4">
		<meta name="msapplication-TileImage" content="../../assets/images/favicon/mstile-144x144.png">
		<!-- For Windows Phone -->

		<!-- CORE CSS-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="../../assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="../../assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
		<!-- Custome CSS-->
		<link href="../../assets/css/custom/custom.css" type="text/css" rel="stylesheet" media="screen,projection">

		<!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
		<link href="../../assets/js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="../../assets/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="../../assets/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">

	</head>

	<body>

		<?php echo $estructura->loadPage()  ?>
		<?php echo $estructura->headerPage()?>

		<div id="main">

		<div class="wrapper">
			<?php echo $estructuraAdmin->menuAdmin()  ?>

			<section id="content">

                <div class="container">
                    <div class="section">
                        <ul class="tabs tabs-transparent">
                            <li class="tab"><a class="center-align" href="#test1"><strong>REGISTRO DE USUARIOS</strong></a></li>
                            <li class="tab"><a class="center-align" href="#test2"><strong>REGISTRO DE ALUMNOS</strong></a></li>
                            <li class="tab"><a class="center-align" href="#test3"><strong>REGISTRO DE MAESTROS</strong></a></li>
                            <li class="tab"><a class="center-align" href="#test4"><strong>REGISTRO DE MATERIAS</strong></a></li>
                        </ul>

                        <div id="test1" class="col s12">
                            <div class="col s12 m12 l6">
                                <div class="row">
                                    <form class="col s12" method="post">
                                        <div class="row">
                                            <div class="input-field col s12 m3 12">
                                                <i class="material-icons prefix">person_outline</i>
                                                <input id="nameUser" name="nameUser" type="text" class="validate">
                                                <label for="nameUser">NOMBRE:</label>
                                            </div>
                                            <div class="input-field col s12 m3 12">
                                                <i class="material-icons prefix">person_outline</i>
                                                <input id="aPaterno" name="aPaterno" type="text" class="validate">
                                                <label for="aPaterno">APELLIDO PATERNO:</label>
                                            </div>
                                            <div class="input-field col s12 m3 12">
                                                <i class="material-icons prefix">person_outline</i>
                                                <input id="aMaterno" name="aMaterno" type="text" class="validate">
                                                <label for="aMaterno">APELLIDO MATERNO:</label>
                                            </div>
                                            <div class="input-field col s12 m3 12">
                                                <i class="material-icons prefix">person</i>
                                                <input id="nickName" name="nickName" type="text" class="validate">
                                                <label for="nickName">NOMBRE DE USUARIO:</label>
                                            </div>
                                            <div class="input-field col s12 m3 12">
                                                <i class="material-icons prefix">vpn_key</i>
                                                <input id="pass" type="password" name="pass" class="validate">
                                                <label for="pass">CONTRASEÑA</label>
                                            </div>
                                            <div class="input-field col s12 m3 12">
                                                <i class="material-icons prefix">phone</i>
                                                <input id="phone" name="phone" type="text" class="validate">
                                                <label for="phone">TELEFONO:</label>
                                            </div>
                                            <?php echo $administrador->showCargo()?>
                                            <div class="input-field col s12 offset-s9">
                                                <button class="medium btn-large cyan waves-effect waves-light" type="submit">
                                                    <i class="material-icons left">person_add</i> REGISTRAR Usuario
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="test2" class="col s12">
                            <div class="col s12 m12 l6">
                                <div class="row">
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s12 m3 12">
                                                <i class="material-icons prefix">person_outline</i>
                                                <input id="nameAlumno" type="text" class="validate">
                                                <label for="nameAlumno">NOMBRE:</label>
                                            </div>
                                            <div class="input-field col s12 m3 12">
                                                <i class="material-icons prefix">person_outline</i>
                                                <input id="apaternoAlumno" type="text" class="validate">
                                                <label for="apaternoAlumno">APELLIDO PATERNO:</label>
                                            </div>
                                            <div class="input-field col s12 m3 12">
                                                <i class="material-icons prefix">person_outline</i>
                                                <input id="amaternoAlumno" type="text" class="validate">
                                                <label for="amaternoAlumno">APELLIDO MATERNO:</label>
                                            </div>
                                            <div class="input-field col s12 m3 12">
                                                <i class="material-icons prefix">list</i>
                                                <input id="matriculaAlumno" type="text" class="validate">
                                                <label for="matriculaAlumno">MATRICULA:</label>
                                            </div>
                                            <div class="input-field col s12 m3 12">
                                                <i class="material-icons prefix">phone</i>
                                                <input id="telefonoAlumno" type="text" class="validate">
                                                <label for="telefonoAlumno">TELEFONO:</label>
                                            </div>
                                            <?php echo $administrador->showGrado() ?>
                                            <?php echo $administrador->showGrupo() ?>
                                            <div  id="input-select">
                                                <div class="input-field col s12 m3 12">
                                                    <label>STATUS:</label>
                                                    <select>
                                                        <option value="" disabled selected>SELEC. EL STATUS</option>
                                                        <option value="1">CAJA</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="input-field col s12 offset-s9">
                                                <button class="medium btn-large cyan waves-effect waves-light" type="submit" name="action">
                                                    <i class="material-icons left">person_add</i> REGISTRAR ALUMNO
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="test3" class="col s12">
                            <div class="col s12 m12 l6">
                                <div class="row">
                                    <form class="col s12" method="post">
                                        <div class="row">
                                            <div class="input-field col s12 m3 12">
                                                <i class="material-icons prefix">person_outline</i>
                                                <input id="nameDoc" name="nameDoc" type="text" class="validate">
                                                <label for="nameDoc">NOMBRE:</label>
                                            </div>

                                            <div class="input-field col s12 m3 12">
                                                <i class="material-icons prefix">person_outline</i>
                                                <input id="aPaternoDoc" name="aPaternoDoc" type="text" class="validate">
                                                <label for="aPaternoDoc">APELLIDO PATERNO:</label>
                                            </div>

                                            <div class="input-field col s12 m3 12">
                                                <i class="material-icons prefix">person_outline</i>
                                                <input id="aMaternoDoc" name="aMaternoDoc" type="text" class="validate">
                                                <label for="aMaternoDoc">APELLIDO MATERNO:</label>
                                            </div>

                                            <div class="input-field col s12 m3 12">
                                                <i class="material-icons prefix">list</i>
                                                <input id="matriculaDoc" name="matriculaDoc" type="text" class="validate">
                                                <label for="matriculaDoc">MATRICULA:</label>
                                            </div>

                                            <div class="input-field col s12 m3 12">
                                                <i class="material-icons prefix">phone</i>
                                                <input id="phoneDoc" name="phoneDoc" type="text">
                                                <label for="phoneDoc">TELEFONO:</label>
                                            </div>

                                            <div class="input-field col s6 offset-s9">
                                                <button class="medium btn-large cyan waves-effect waves-light" type="submit" name="action">
                                                    <i class="material-icons left">person_add</i> REGISTRAR DOCENTE
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="test4" class="col s12">

                        </div>

                    </div>
                </div>

			</section>

		</div>

		</div>

		<?php echo $estructura->footerPage() ?>

		<!-- ============== Scripts ====================== -->
		<!-- jQuery Library -->
		<script type="text/javascript" src="../../assets/js/plugins/jquery-1.11.2.min.js"></script>
		<!--angularjs-->
		<script type="text/javascript" src="../../assets/js/plugins/angular.min.js"></script>
		<!--materialize js-->
		<script type="text/javascript" src="../../assets/js/materialize.js"></script>
		<!--scrollbar-->
		<script type="text/javascript" src="../../assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<!--formatter-->
		<script type="text/javascript" src="../../assets/js/plugins/formatter/jquery.formatter.min.js"></script>
		<!--plugins.js - Some Specific JS codes for Plugin Settings-->
		<script type="text/javascript" src="../../assets/js/plugins.js"></script>
		<!--custom-script.js - Add your own theme custom JS-->
		<script type="text/javascript" src="../../assets/js/custom-script.js"></script>

	</body>

</html>
