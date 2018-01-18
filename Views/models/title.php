<?php
		/**
		 * Estos metodos mandan a llamar campos que no cambian.
		 */
		class modulos{

			#load-page
			function load(){
				return"<div id="."loader-wrapper".">
						<div id="."loader"."></div>
						<div class="."loader-section section-left"."></div>
						<div class="."loader-section section-right"."></div>
				</div>
				";
			}

			#header
			function header(){
				return"
				<div class="."navbar-fixed".">
						<nav class="."navbar-color".">
								<div class="."nav-wrapper".">
										<a class="."brand-logo center".">UNIVERSIDAD MESOAMERICANA - CLÍNICA ESTOMATOLÓGIA</a>
								</div>
						</nav>
				</div>
				";

			}

			#Footer
			function footer(){
				return"
				<div class="."navbar-fixed".">
						<nav class="."navbar-color".">
								<div class="."av-wrapper".">
										<a class="."rand-logo center".">UNIVERSIDAD MESOAMERICANA - CLÍNICA ESTOMATOLÓGIA</a>
								</div>
						</nav>
				</div>
				";
			}

			#Opciones-User
			function opUser(){
				return"
				<li class="."user-details cyan darken-2".">
					<div class="."row".">
							<div class="."col col s9 m9 l9".">
									<ul id="."profile-dropdown"." class="dropdown-content">
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
				";
			}

		}
 ?>
