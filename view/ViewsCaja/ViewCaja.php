<!DOCTYPE html>
<html lang="en">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-tap-highlight" content="no">
		<meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
		<meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
		<title>Caja - Tantli</title>

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
					<nav class="navbar-color nav-extended">
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
					<li class="bold active"><a href="ViewCaja.html" class="waves-effect waves-cyan"><i class="material-icons">monetization_on</i> Caja</a>  </li>
					<li class="bold"><a href="ViewUnidadClinica.html" class="waves-effect waves-cyan"><i class="material-icons">folder</i> Unidad Clínica</a> </li>
					<li class="bold"><a href="ViewRegPacient.html" class="waves-effect waves-cyan"><i class="material-icons">perm_identity</i> Reg. Pacientes</a> </li>
					<li class="bold"><a href="Viewlocker.html" class="waves-effect waves-cyan"><i class="material-icons">lock</i> Locker</a></li>
								<li class="bold"><a href="ViewFiltro.html" class="waves-effect waves-cyan"><i class="material-icons">markunread_mailbox</i></i> Filtro</a> </li>
				</ul>
				<a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan">
				<i class="mdi-navigation-menu"></i>
				</a>
			</aside>
			<!-- END LEFT SIDEBAR NAV-->

			<!-- START CONTENT -->
			<section id="content">
				<!--start container-->
				<!--Formulario de caja -->
						<div class="container">
							<div class="section">
								<h1 class="center-align">CAJA VERANO 2017</h1>
								<div class="divider"></div>
								<div class="divider"></div>
								<div class="divider"></div>
								<div class="col s12 m12 l6">
										<div class="row">
											<form class="col s12">
												<div class="row">
													<div class="input-field col s12 m4 12">
															<i class="material-icons prefix">folder</i>
															<input id="password5" type="number" class="validate">
															<label for="password">FOLIO:</label>
														</div>
													<div class="input-field col s12 m4 12">
															<i class="material-icons prefix">list</i>
															<input id="name4" type="number" class="validate">
															<label for="first_name">MATRICULA:</label>
														</div>
													<div class="input-field col s12 m4 12">
															<i class="material-icons prefix">face</i>
															<input id="password5" type="text" class="validate">
															<label for="password">ALUMNO:</label>
														</div>
													<div class="input-field col s12 m2 12">
															<i class="material-icons prefix">sort_by_alph</i>
															<input id="password5" type="text" class="validate">
															<label for="password">GRADO:</label>
														</div>
													<div class="input-field col s12 m2 12">
															<i class="material-icons prefix">sort_by_alpha</i>
															<input id="password5" type="text" class="validate">
															<label for="password">GRUPO:</label>
														</div>
													<div class="input-field col s12 m4 12">
															<i class="material-icons prefix">accessibility</i>
															<input id="password5" type="text" class="validate">
															<label for="password">PACIENTE:</label>
														</div>
													<div class="input-field col s12 m4 12">
															<i class="material-icons prefix">closed_caption</i>
															<input id="password5" type="text" class="validate">
															<label for="password">CLAVE DC:</label>
														</div>
													<div class="input-field col s12 m4 12">
															<i class="material-icons prefix">description</i>
															<input id="password5" type="text" class="validate">
															<label for="password">NOMBRE:</label>
														</div>
													<div class="input-field col s12 m2 12">
															<i class="material-icons prefix">access_time</i>
															<input id="password5" type="text" class="validate">
															<label for="password">TIEMPO:</label>
														</div>
													<div class="input-field col s12 m2 12">
															<i class="material-icons prefix">monetization_on</i>
															<input id="password5" type="text" class="validate">
															<label for="password">PRECIO:</label>
														</div>
													<div class="input-field col s12 m2 12">
															<i class="material-icons prefix">assessment</i>
															<input id="password5" type="text" class="validate">
															<label for="password">ETAPAS:</label>
														</div>
													<div class="input-field col s12 m2 12">
															<i class="material-icons prefix">exposure</i>
															<input id="password5" type="text" class="validate">
															<label for="password">CANTIDAD:</label>
														</div>
													<div class="input-field col s12 m2 12">
															<i class="material-icons prefix">monetization_on</i>
															<input id="password5" type="text" class="validate">
															<label for="password">TOTAL:</label>
														</div>
													<div class="input-field col s12 m2 12">
															<i class="material-icons prefix">confirmation_number</i>
															<input id="password5" type="text" class="validate">
															<label for="password">O.D:</label>
														</div>
													<div class="input-field col s12 m4 12">
															<i class="material-icons prefix">school</i>
															<input id="password5" type="text" class="validate">
															<label for="password">DOCENTE:</label>
														</div>
													<div class="input-field col s12 m4 12">
															<i class="material-icons prefix">book</i>
															<input id="password5" type="text" class="validate">
															<label for="password">ASIGNATURA:</label>
														</div>
													<div class="input-field col s12 m4 12 ">
															<i class="material-icons prefix">account_box</i>
															<input id="password5" type="text" class="validate">
															<label for="password">COBRO:</label>
														</div>
													<div class="input-field col s12 m4 12">
															<i class="material-icons prefix">closed_caption</i>
															<input id="password5" type="text" class="validate">
															<label for="password">CODIGO:</label>
														</div>

													<div class="col s12 offset-s1 center-align">
														<div class="input-field col s6">
															<div class="input-field col s12 m6 12">
																<button class="medium btn-large cyan waves-effect waves-light" type="submit" name="action">
																	<i class="material-icons left">add</i> REGISTRAR TX
																</button>
															</div>
														</div>
														<div class="input-field col s6">
															<div class="input-field col s12 m6 12">
																<button class="medium btn-large cyan waves-effect waves-light" type="submit" name="action">
																	<i class="material-icons  left">clear_all</i> LIMPIAR CAMPOS
																</button>
															</div>
														</div>
													</div>
												</div>
											</form>
										</div>
								</div>
							</div>
						</div>
				<!-- Fin de Formulario de caja-->
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
		<script type="text/javascript" src="../../assets/js/plugins/jquery-1.11.2.min.js"></script>
		<!--angularjs-->
		<script type="text/javascript" src="../../assets/js/plugins/angular.min.js"></script>
		<!--materialize js-->
		<script type="text/javascript" src="../../assets/js/materialize.js"></script>
		<!--prism -->
		<script type="text/javascript" src="../../assets/js/plugins/prism/prism.js"></script>
		<!--scrollbar-->
		<script type="text/javascript" src="../../assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

		<script type="text/javascript" src="../../assets/js/plugins/formatter/jquery.formatter.min.js"></script>
		<!--plugins.js - Some Specific JS codes for Plugin Settings-->
		<script type="text/javascript" src="../../assets/js/plugins.js"></script>
		<!--custom-script.js - Add your own theme custom JS-->
		<script type="text/javascript" src="../../assets/js/custom-script.js"></script>


	</body>

</html>
