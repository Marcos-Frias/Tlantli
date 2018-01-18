<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador - Tantli</title>

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
    <link href="../../js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../../js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../../js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">

</head>

<body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">
                        <li>
                            <h1 class="logo-wrapper">
                                <a href="index.html" class="brand-logo darken-1">
                                    <img class="rbi-logo" src="" alt="">
                                    <img class="mss-logo" src="" alt=""/>
                                </a>
                                <span class="logo-text">RBI MySportsShare</span>
                            </h1>
                        </li>
                    </ul>
                    <div class="header-search-wrapper hide-on-med-and-down">
                        <i class="mdi-action-search"></i>
                        <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Tratamientos clinicos"/>
                    </div>
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
													<a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">Marcos
														<i class="mdi-navigation-arrow-drop-down right"></i>
													</a>
													<p class="user-roal">Administrador</p>
											</div>
									</div>
								</li>
								<li class="bold active"><a href="" class="wave-effect wave-cyan"><i class="materialicons"></i>Admin</a></li>
                <li class="bold"><a href="../ViewsCaja/ViewCaja.html" class="waves-effect waves-cyan"><i class="material-icons">monetization_on</i> Caja</a>  </li>
                <li class="bold"><a href="../ViewsArchivo/ViewArchivo.html" class="waves-effect waves-cyan"><i class="material-icons">folder</i> Archivo</a> </li>
                <li class="bold"><a href="../ViewsCEYE/ViewCeye.html" class="waves-effect waves-cyan"><i class="material-icons">markunread_mailbox</i></i> CEYE</a> </li>
                <li class="bold"><a href="../ViewsClinica/ViewClinica.html" class="waves-effect waves-cyan"><i class="material-icons">local_hospital</i> Clínica</a> </li>
                <li class="bold"><a href="../../app-calendar.html" class="waves-effect waves-cyan"><i class="material-icons">date_range</i> Citas</a> </li>
                <li class="bold"><a href="" class="waves-effect waves-cyan"><i class="material-icons">content_paste</i> Reportes</a> </li>
              </ul>
              <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!--card stats start-->
            <div id="card-stats">
                <div class="row">
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-content  green white-text">
                                <p class="card-stats-title"><i class="mdi-social-group-add"></i>Alumnos</p>
                                <h4 class="card-stats-number">566</h4>
                                <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 15%
																	<span class="green-text text-lighten-5">from yesterday</span>
                                </p>
                            </div>
                            <div class="card-action  green darken-2">
                                <div id="clients-bar" class="center-align"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-content pink lighten-1 white-text">
                                <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i>Tratamientos</p>
                                <h4 class="card-stats-number">1806</h4>
                                <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i> 3%
																	<span class="deep-purple-text text-lighten-5">from last month</span>
                                </p>
                            </div>
                            <div class="card-action  pink darken-2">
                                <div id="invoice-line" class="center-align"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-content blue-grey white-text">
                                <p class="card-stats-title"><i class="mdi-action-trending-up"></i>Ganancia del dia</p>
                                <h4 class="card-stats-number">$806.52</h4>
                                <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 80%
																	<span class="blue-grey-text text-lighten-5">from yesterday</span>
                                </p>
                            </div>
                            <div class="card-action blue-grey darken-2">
                                <div id="profit-tristate" class="center-align"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-content purple white-text">
                                <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Ganancia Semanal</p>
                                <h4 class="card-stats-number">$8990.63</h4>
                                <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 70%
																	<span class="purple-text text-lighten-5">last month</span>
                                </p>
                            </div>
                            <div class="card-action purple darken-2">
                                <div id="sales-compositebar" class="center-align"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--card stats end-->

            <!-- START CONTENT -->
            <section id="content">
                <!--start container-->
                <div class="container">
                  <!--chart dashboard start-->
                  <div id="chart-dashboard">
                      <div class="row">
                          <div class="col s12 m12 18">
                              <div class="card">
                                  <div class="card-move-up waves-effect waves-block waves-light">
                                      <div class="move-up cyan darken-1">
                                          <div>
                                              <span class="chart-title white-text">Ganancia de la Semana</span>
                                              <div class="chart-revenue cyan darken-2 white-text">
                                                  <p class="chart-revenue-total">$4,500.85</p>
                                                  <p class="chart-revenue-per"><i class="mdi-navigation-arrow-drop-up"></i> 21.80 %</p>
                                              </div>
                                              <div class="switch chart-revenue-switch right">
                                                  <label class="cyan-text text-lighten-5">
                                                    Mes
                                                    <input type="checkbox">
                                                    <span class="lever"></span> Año
                                                  </label>
                                              </div>
                                          </div>
                                          <div class="trending-line-chart-wrapper">
                                              <canvas id="trending-line-chart" height="70"></canvas>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="card-content">
                                      <a class="btn-floating btn-move-up waves-effect waves-light darken-2 right"><i class="mdi-content-add activator"></i></a>
                                  </div>

                                  <div class="card-reveal">
                                      <span class="card-title grey-text text-darken-4">Tratamientos del Día<i class="mdi-navigation-close right"></i></span>
                                      <table class="responsive-table">
                                          <thead>
                                              <tr>
                                                  <th data-field="id">Folio</th>
                                                  <th data-field="month">Alumno</th>
                                                  <th data-field="item-sold">Paciente</th>
                                                  <th data-field="item-price">Tratamiento</th>
                                                  <th data-field="total-profit">Precio</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <td>1</td>
                                                  <td>January</td>
                                                  <td>122</td>
                                                  <td>100</td>
                                                  <td>$122,00.00</td>
                                              </tr>
                                              <tr>
                                                  <td>2</td>
                                                  <td>February</td>
                                                  <td>122</td>
                                                  <td>100</td>
                                                  <td>$122,00.00</td>
                                              </tr>
                                              <tr>
                                                  <td>3</td>
                                                  <td>March</td>
                                                  <td>122</td>
                                                  <td>100</td>
                                                  <td>$122,00.00</td>
                                              </tr>
                                              <tr>
                                                  <td>4</td>
                                                  <td>April</td>
                                                  <td>122</td>
                                                  <td>100</td>
                                                  <td>$122,00.00</td>
                                              </tr>
                                              <tr>
                                                  <td>5</td>
                                                  <td>May</td>
                                                  <td>122</td>
                                                  <td>100</td>
                                                  <td>$122,00.00</td>
                                              </tr>
                                              <tr>
                                                  <td>6</td>
                                                  <td>June</td>
                                                  <td>122</td>
                                                  <td>100</td>
                                                  <td>$122,00.00</td>
                                              </tr>
                                              <tr>
                                                  <td>7</td>
                                                  <td>July</td>
                                                  <td>122</td>
                                                  <td>100</td>
                                                  <td>$122,00.00</td>
                                              </tr>
                                              <tr>
                                                  <td>8</td>
                                                  <td>August</td>
                                                  <td>122</td>
                                                  <td>100</td>
                                                  <td>$122,00.00</td>
                                              </tr>
                                              <tr>
                                                  <td>9</td>
                                                  <td>Septmber</td>
                                                  <td>122</td>
                                                  <td>100</td>
                                                  <td>$122,00.00</td>
                                              </tr>
                                              <tr>
                                                  <td>10</td>
                                                  <td>Octomber</td>
                                                  <td>122</td>
                                                  <td>100</td>
                                                  <td>$122,00.00</td>
                                              </tr>
                                              <tr>
                                                  <td>11</td>
                                                  <td>November</td>
                                                  <td>122</td>
                                                  <td>100</td>
                                                  <td>$122,00.00</td>
                                              </tr>
                                              <tr>
                                                  <td>12</td>
                                                  <td>December</td>
                                                  <td>122</td>
                                                  <td>100</td>
                                                  <td>$122,00.00</td>
                                              </tr>
                                          </tbody>
                                      </table>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!--chart dashboard end-->

                    <!-- //////////////////////////////////////////////////////////////////////////// -->
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
    <!--materialize js-->
    <script type="text/javascript" src="../../js/materialize.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="../../js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="../../js/plugins/chartist-js/chartist.min.js"></script>

    <!-- chartjs -->
    <script type="text/javascript" src="../../js/plugins/chartjs/chart.min.js"></script>
    <script type="text/javascript" src="../../js/plugins/chartjs/chart-script.js"></script>

    <!-- sparkline -->
    <script type="text/javascript" src="../../js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="../../js/plugins/sparkline/sparkline-script.js"></script>
    <!--jvectormap-->
    <script type="text/javascript" src="../../js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script type="text/javascript" src="../../js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="../../js/plugins/jvectormap/vectormap-script.js"></script>

    <!--google map
    <script type="text/javascript" src="js/plugins/google-map/google-map-script.js"></script> -->


    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="../../js/plugins.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="../../js/custom-script.js"></script>

</body>

</html>
