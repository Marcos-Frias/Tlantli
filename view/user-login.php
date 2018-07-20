<?php
	include_once "model/estructura/estructura.php";
	include_once "model/modelAdmin/modeloAdmin.php";
	include_once "controller/controller.php";
	$estructura = new estructuraGeneral();
  $controlador = new controller();
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
    <title>Login | Tlantli</title>
    <!-- Favicons-->
    <link rel="icon" href="assets/images/favicon/estoma.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="assets/images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="assets/images/favicon/mstile-144x144.png">
    <!-- CORE CSS-->
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="assets/css/custom/custom.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="assets/css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="assets/js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="assets/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  </head>
  <body>
    <?php echo $estructura->loadPage()  ?>
		<div id="login-page" class="row">
			<div class="col s12 z-depth-4 card-panel">
				<form class="login-form" method="post">
					<div class="row">
						<div class="input-field col s12 center">
							<img src="assets/images/logo-Uma-dorado.jpg" alt="" class="circle responsive-img valign profile-image-login">
							<p class="center yellow-text">SISTEMA CLÍNICA - TLANTLI</p>
						</div>
					</div>
					<div class="row margin">
						<div class="input-field col s12">
							<i class="mdi-social-person-outline prefix"></i>
							<input id="nickname" name="nickname" type="text">
							<label for="nickname" class="center-align">Nombre de Usuario</label>
						</div>
					</div>
					<div class="row margin">
						<div class="input-field col s12">
							<i class="mdi-action-lock-outline prefix"></i>
							<input id="password" name="password" type="password">
							<label for="password">Contraseña</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 m12 l12  login-text">
							<input type="checkbox" id="remember-me" />
							<label for="remember-me">Recordar mis datos</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s10 offset-s2">
							<input type="submit" class="btn" value="Iniciar sesión">
						</div>
					</div>
					<div class="row">
						<div class="input-field col s8 m8 12">
							<p class="margin medium-small center">
								<a href="user-forgot-password.html">¿Olvidaste la contraseña?</a>
							</p>
						</div>
					</div>
				</form>
			</div>
		</div>
    <!-- ============== Scripts ====================== -->
    <!-- jQuery Library -->
    <script type="text/javascript" src="assets/js/plugins/jquery-1.11.2.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="assets/js/materialize.js"></script>
    <!--prism-->
    <script type="text/javascript" src="assets/js/plugins/prism/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="assets/js/plugins.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="assets/js/custom-script.js"></script>
  </body>
</html>
