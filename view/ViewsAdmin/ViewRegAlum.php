<?php
	include_once "../../models/conexion.php";
	include_once "../../models/estructura/estructura.php";
	include_once "../../models/modelAdmin/modeloAdmin.php";
	include_once "../../controllers/controllerAdmin/contAdmin.php";

	$estructura = new estructuraGeneral();
	$estructuraAdmin = new estructuraAdmin();
	$administrador = new controllerAdmin();
	$administrador ->insertAlumno();
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
		<title>Registro Alumnos - Tantli</title>

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

		<?php echo $estructura->loadPage() ?>
		<?php echo $estructura->headerPage() ?>

		<div id="main">

			<div class="wrapper">

				<?php echo $estructuraAdmin->menuAdmin() ?>

				<section id="content">

					<div class="container">
						<div class="section">
							<div class="divider"></div><div class="divider"></div><div class="divider"></div>
							<h1 class="center-align"> <strong>REGISTRO DE ALUMNOS</strong></h1>
							<div class="divider"></div><div class="divider"></div><div class="divider"></div>
							<div class="col s12 m12 l6">
								<div class="row">
									<form class="col s12" method="post">
										<div class="row">
											<div class="input-field col s12 m3 12">
												<i class="material-icons prefix">person_outline</i>
												<input id="nameAlumno" name="nameAlumno" type="text" class="validate">
												<label for="nameAlumno">NOMBRE:</label>
											</div>
											<div class="input-field col s12 m3 12">
												<i class="material-icons prefix">person_outline</i>
												<input id="apaternoAlumno" name="apaternoAlumno" type="text" class="validate">
												<label for="apaternoAlumno">APELLIDO PATERNO:</label>
											</div>
											<div class="input-field col s12 m3 12">
												<i class="material-icons prefix">person_outline</i>
												<input id="amaternoAlumno" name="amaternoAlumno" type="text" class="validate">
												<label for="amaternoAlumno">APELLIDO MATERNO:</label>
											</div>
											<div class="input-field col s12 m3 12">
												<i class="material-icons prefix">list</i>
												<input id="matriculaAlumno" name="matriculaAlumno" type="text" class="validate">
												<label for="matriculaAlumno">MATRICULA:</label>
											</div>
											<div class="input-field col s12 m3 12">
												<i class="material-icons prefix">phone</i>
												<input id="phoneAlumno" name="phoneAlumno" type="text" class="validate">
												<label for="phoneAlumno">TELEFONO:</label>
											</div>
											<?php echo $administrador->showGrado() ?>
											<?php echo $administrador->showGrupo() ?>

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
					</div>

				</section>
				
			</div>

		</div>

    	<?php echo $estructura->footerPage()  ?>

		<!-- ============== Scripts ====================== -->

		<!-- jQuery Library -->
		<script type="text/javascript" src="../../assets/js/plugins/jquery-1.11.2.min.js"></script>
		<!--angularjs-->
		<script type="text/javascript" src="../../assets/js/plugins/angular.min.js"></script>
		<!--materialize js-->
		<script type="text/javascript" src="../../assets/js/materialize.js"></script>
		<!--scrollbar-->
		<script type="text/javascript" src="../../assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

		<script type="text/javascript" src="../../assets/js/plugins/formatter/jquery.formatter.min.js"></script>
		<!--plugins.js - Some Specific JS codes for Plugin Settings-->
		<script type="text/javascript" src="../../assets/js/plugins.js"></script>
		<!--custom-script.js - Add your own theme custom JS-->
		<script type="text/javascript" src="../../assets/js/custom-script.js"></script>
	</body>

</html>