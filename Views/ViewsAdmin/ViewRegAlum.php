<?php
	include_once "../../models/conexion.php";
	include_once "../../models/estructura/estructura.php";
	include_once "../../models/modelAdmin/modeloAdmin.php";
	include_once "../../controllers/controllerAdmin/contAdmin.php";

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

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">
      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
          <ul id="slide-out" class="side-nav fixed leftside-navigation">
						<li class="user-details cyan darken-2">
							<div class="row">
									<div class="col col s9 m9 l9">
											<ul id="profile-dropdown" class="dropdown-content">
													<li><a href="#"><i class="mdi-action-face-unlock"></i> Perfil</a></li>
													<li><a href="#"><i class="mdi-action-settings"></i>Config.</a></li>
													<li><a href="#"><i class="mdi-communication-live-help"></i>Ayuda</a> </li>
													<li class="divider"></li>
													<li><a href="#"><i class="mdi-action-lock-outline"></i>Bloq</a></li>
													<li><a href="#"><i class="mdi-hardware-keyboard-tab"></i>Salir</a></li>
											</ul>
											<a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>
											<p class="user-roal">Caja</p>
									</div>
							</div>
						</li>
          <li class="bold active"><a href="ViewRegAlum.html" class="waves-effect waves-cyan"><i class="material-icons">face</i> Reg. Alumno</a></li>
          <li class="bold"><a href="ViewRegDoc.html" class="waves-effect waves-cyan"><i class="material-icons">school</i> Reg. Docente</a></li>
          <li class="bold"><a href="ViewRegMat.html" class="waves-effect waves-cyan"><i class="material-icons">book</i> Materias</a></li>
					<li class="bold"><a href="ViewRegUser.html" class="waves-effect waves-cyan"><i class="material-icons">person</i>Usuarios</a></li>
      </ul>
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
      </aside>
      <!-- END LEFT SIDEBAR NAV-->
      <!-- START CONTENT -->
      <section id="content">
        <!--start container-->
        <!--Formulario de locker -->
				<div class="container">
					<div class="section">
						<h1 class="center-align"> <strong>REGISTRO DE ALUMNOS</strong></h1>
						<div class="divider"></div>
						<div class="divider"></div>
						<div class="divider"></div>
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
				</div>

        <!-- Fin de Formulario de locker-->
    </div>
    <!-- END  WRAPPER -->
    </div>
        </div>
        <!--end container-->

      </section>
      <!-- END CONTENT -->
    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->



  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START FOOTER -->
	<?php echo $estructura->footerPage() ?>
    <!-- END FOOTER -->



    <!-- ================================================
    Scripts
    ================================================ -->

    <!-- jQuery Library -->
    <script type="text/javascript" src="../../assets/js/plugins/jquery-1.11.2.min.js"></script>
    <!--angularjs-->
    <script type="text/javascript" src="../../assets/js/plugins/angular.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="../../assets/js/materialize.js"></script>
    <!--prism -->
    <script type="text/javascript" src="../../assets/js/plugins/prism/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="../../assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="../../assets/js/plugins/chartist-js/chartist.min.js"></script>

    <script type="text/javascript" src="../../assets/js/plugins/formatter/jquery.formatter.min.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="../../assets/js/plugins.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="../../assets/js/custom-script.js"></script>


</body>

</html>