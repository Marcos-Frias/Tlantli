<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Registro Materias - Tantli</title>

  <!-- Favicons-->
  <link rel="icon" href="../../images/favicon/estoma.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="../../images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="../../images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->

  <!-- CORE CSS-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../../css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- Custome CSS-->
  <link href="../../css/custom/custom.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="../../js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../../js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../../js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
	<!--Google Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

</head>

<body>
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
				<div class="navbar-fixed">
						<nav class="navbar-color">
								<div class="nav-wrapper">
										<a class="brand-logo center">UNIVERSIDAD MESOAMERICANA - CLÍNICA ESTOMATOLÓGIA</a>
								</div>
						</nav>
				</div>
        <!-- end header nav-->
  </header>
  <!-- END HEADER -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

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
						<li class="bold"><a href="ViewRegAlum.html" class="waves-effect waves-cyan"><i class="material-icons">face</i> Reg. Alumno</a>  </li>
						<li class="bold"><a href="ViewRegDoc.html" class="waves-effect waves-cyan"><i class="material-icons">school</i> Reg. Docente</a> </li>
						<li class="bold active"><a href="ViewRegMat.html" class="waves-effect waves-cyan"><i class="material-icons">book</i></i>  Materias</a> </li>
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
						<div class="divider"></div><div class="divider"></div><div class="divider"></div>
						<h1 class="center-align">REGISTRO DE MATERIAS</h1>
						<div class="divider"></div><div class="divider"></div><div class="divider"></div>

						<div class="col s12 m12 l6">
								<div class="row">
									<form class="col s12">
										<div class="row">

										<div class="input-field col s12 m5 12">
											<i class="material-icons prefix">list</i>
											<input id="password5" type="text" class="validate">
											<label for="password">NOMBRE MATERIA:</label>
										</div>

										<div class="input-field col s4 offset-s1">
														<button class="medium btn-large cyan waves-effect waves-light" type="submit" name="action">
																<i class="material-icons left">add</i>
																		REGISTRAR MATERIA
														</button>
										</div>

										</div>
									</form>
								</div>
						</div>

						<div class="divider "></div><div class="divider"></div><div class="divider"></div>
						<h1 class="center-align">ASIGNACIÓN DE MATERIAS</h1>
						<div class="divider"></div><div class="divider"></div><div class="divider"></div>

						<div class="col s12 m12 l6">
								<div class="row">
									<form class="col s12">
										<div class="row">
										<div class="input-field col s12 m3 12">
											<i class="material-icons prefix">list</i>
												<input id="password5" type="text" class="validate">
												<label for="password">MATERIA:</label>
										</div>
										<div class="input-field col s12 m3 12">
											<i class="material-icons prefix">sort_by_alpha</i>
												<input id="password5" type="text" class="validate">
												<label for="password">GRADO:</label>
										</div>
										<div class="input-field col s12 m3 12">
											<i class="material-icons prefix">school</i>
												<input id="password5" type="text" class="validate">
												<label for="password">PROFESOR:</label>
										</div>
										<div class="input-field col s3">
														<button class="medium btn-large cyan waves-effect waves-light" type="submit" name="action">
																<i class="material-icons left">playlist_add_check</i>
																		ASIGNARMATERIA
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
	<footer class="page-footer">
		<div class="footer-copyright">
			<div class="container">
				<span>Copyright © 2017  Todos los derechos reservados.</span>
				<span class="right"> Diseño y Desarrollo por  Marcos Felipe Frías Martínez</span>
			</div>
		</div>
	</footer>
    <!-- END FOOTER -->



    <!-- ================================================
    Scripts
    ================================================ -->

    <!-- jQuery Library -->
    <script type="text/javascript" src="../../js/plugins/jquery-1.11.2.min.js"></script>
    <!--angularjs-->
    <script type="text/javascript" src="../../js/plugins/angular.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="../../js/materialize.js"></script>
    <!--prism -->
    <script type="text/javascript" src="../../js/plugins/prism/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="../../js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="../../js/plugins/chartist-js/chartist.min.js"></script>

    <script type="text/javascript" src="../../js/plugins/formatter/jquery.formatter.min.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="../../js/plugins.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="../../js/custom-script.js"></script>


</body>

</html>
