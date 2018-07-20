<?php

	/**
	 * Estructura General del Sistema.
	 */
	class estructuraGeneral {

		public function headerPage(){
			return '
			<header id="header" class="page-topbar">
				<div class="navbar-fixed">
					<nav class="navbar-color">
						<div class="nav-wrapper">
							<a class="brand-logo center">UNIVERSIDAD MESOAMERICANA - CLÍNICA DE ESTOMATOLÓGIA</a>
							<ul class="right hide-on-med-and-down">
                            	<li>
                                	<a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
                                    	<i class="mdi-action-settings-overscan"></i>
                                	</a>
                            	</li>
                        	</ul>
						</div>
					</nav>
				</div>
			</header>';
		}

		public function footerPage(){
			return '
			<footer class="page-footer">
				<div class="footer-copyright">
					<div class="container">
						<span>Copyright © 2017  Todos los derechos reservados.</span>
						<span class="right"> Diseño y Desarrollo por <strong>Marcos Felipe Frías Martínez</strong></span>
					</div>
				</div>
			</footer>
			';
		}

		public function loadPage(){
			return '
			<div id="loader-wrapper">
					<div id="loader"></div>
					<div class="loader-section section-left"></div>
					<div class="loader-section section-right"></div>
			</div>
			';
		}

	}

	/**
	 * Estructura que ocupa el administrador.
	 */
	class estructuraAdmin {

		public function menuAdmin(){
			return '
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
          			<li class="bold"><a href="ViewRegAlum.php" class="waves-effect waves-cyan"><i class="material-icons">face</i>Reg. Alumno</a>  </li>
          			<li class="bold"><a href="ViewRegDoc.php" class="waves-effect waves-cyan"><i class="material-icons">school</i>Reg. Docente</a> </li>
          			<li class="bold"><a href="ViewRegMat.php" class="waves-effect waves-cyan"><i class="material-icons">book</i>Materias</a> </li>
					<li class="bold"><a href="ViewRegUser.php" class="waves-effect waves-cyan"><i class="material-icons">person</i>Usuarios</a></li>
        		</ul>
        		<a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
      		</aside>';
		}

	}


	/**
	 * Estructura de CEYE.
	 */
	class estructuraCEYE {


	}

	/**
	 * Estructura de Caja.
	 */
	class estructuraCaja {


	}

	/**
	 * Estructura de Clinica.
	 */
	class estructuraClinica {


	}

	/**
	 * Estructura de Archivo.
	 */
	class estructuraArchivo {


	}

?>
