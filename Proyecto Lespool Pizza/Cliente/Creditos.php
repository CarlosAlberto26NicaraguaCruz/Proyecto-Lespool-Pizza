<?php 
session_start();
  session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lespool Pizza</title>
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="../css/estilocliente.css">
	</head>
<body>
	
	<div class="navbar-fixed">

		<!--<nav class="teal grey lighten-5" >-->
		<a href="#!" id="logo" class="brand-logo left"><img id="milogo" src="../img/logo.png" alt=""></a>
		  <div class="nav-wrapper">
			<!-- Modal iniciar sesion y registrarse -->
			
	        <h5 class="center " style="color: #01579b" ><font face="Comic Sans MS,arial,verdana" >Excelente sabor para disfrutar!!!</font></h5>
		  </div>
	    <!--</nav>-->
	</div>

	<div class="navbar-inherit">
		<nav>
		<div class="nav-wrapper  light-blue darken-4">
			<!-- activate side-bav in mobile view -->
			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
			<ul class="brand-logo center hide-on-med-and-down">
				<li><a href="Inicio.php">Inicio</a></li>
				<li><a href="Menu.php">Menú</a></li>
				<li><a href="Contactanos.php">Contacto</a></li>
				<li class="active"><a href="Creditos.php">Créditos</a></li>
				
			</ul>
			</div>

			<!-- navbar for mobile -->
			<ul class="side-nav" id="mobile-demo">
				<li><a href="inicio.php">Inicio</a></li>
				<li><a href="Menu.php">Menú</a></li>
				<li><a href="Contactanos.php">Contacto</a></li>
				<li><a href="Creditos.php">Créditos</a></li>
				<li><a href="#">Iniciar Sesion</a></li>
				<li><a href="#">Registrarse</a></li>
			</ul>

	    </nav>
   </div>
	
	

	
	<br><br><br><br>


	<!--MODAL INICIAR SESION-->
			<div id="modal1" class="modal" >
			<div class="modal-content">
				<h4>Iniciar Sesión</h4>
				<div class="row">
					<form action="inicio.php" method="POST" class="cold s12">
						<div class="row">
							<div class="input-field cold s12">
								<input type="text" id="usuario" name="usuario" class="validate">
								<label for="primero">Usuario</label> <br>
							</div>

							<div class="input-field cold s12">
								<input type="password" id="password" name="password" class="validate">
								<label for="segundo">Contraseña</label>
							</div>
						</div>
						<button type="submit" class="btn waves-effect waves-light green darken-3"><i class="mdi-content-send right"></i>Enviar</button>
					</form>
				</div>
			</div>
			<div class="modal-footer">
				<a href="#" class="waves-effect waves-green btn-flat modal-action modal-close ">Cerrar</a>
			</div>
		</div>



<!--MODAL CREAR CUENTA-->
			<div id="modal2" class="modal">
				<div class="modal-content">
					<h4>Crear Cuenta</h4>
					<div class="row">
						<form action="registro.php" method="POST" class="cold s12">
							<div class="row">
								<div class="input-field cold s12">
									<input type="text" id="nombre" name="nom" class="validate">
									<label for="primero">Nombre</label> <br>
								</div>

								<div class="input-field cold s12">
									<input type="text" id="apellidos" name="ape" class="validate">
									<label for="segundo">Apellidos</label>
								</div>

								<div class="input-field cold s12">
									<input type="text" id="correo" name="correo" class="validate">
									<label for="tercero">Correo</label>
								</div>

								<div class="input-field cold s12">
									<input type="text" id="telefono" name="tel" class="validate">
									<label for="segundo">Telefono</label>
								</div>

								<div class="input-field cold s12">
									<input type="text" id="direccion" name="dir" class="validate">
									<label for="segundo">Dirección</label>
								</div>

								<div class="input-field cold s12">
									<input type="password" id="contraseña" name="contra" class="validate">
									<label for="segundo">Contraseña</label>
								</div>

								<div class="input-field cold s12">
									<input type="password" id="confcontraseña" name="confcontra" class="validate">
									<label for="segundo">Confirmar Contraseña</label>
								</div>
								

							</div>
							<button type="submit" class="btn waves-effect waves-light green darken-3"><i class="mdi-content-send right"></i>Enviar</button>
						</form>
					</div>
				</div>
				<div class="modal-footer">
					<a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Cerrar</a>
				</div>
			</div>
			

		<div class="row">
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Misión</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#"></a>
            </div>
          </div>
        </div>
           
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Visión</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#"></a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
		
        <div class="col s12 m12">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Objetivos</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus optio tempora consectetur illo rerum rem culpa aspernatur ipsa labore. Praesentium totam optio officia illum enim neque deleniti beatae, porro ad.</p>

            </div>
          </div>
        </div>
      </div>		


	<footer class="page-footer  light-blue darken-4">
          <div class="container ">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Síguenos </h5>
				
				<a href="https://www.facebook.com/" class="grey-text text-lighten-4">Facebook</a><br>
				<a href="https://goo.gl/g5yF4u" class="grey-text text-lighten-4">Gmail</a><br>
				<a href="https://twitter.com/?lang=es" class="grey-text text-lighten-4">Twitter</a><br>
				
				</div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Enlace</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="Inicio.php">Inicio</a></li>
                  <li><a class="grey-text text-lighten-3" href="Menu.php">Menú</a></li>
                  <li><a class="grey-text text-lighten-3" href="Contactanos.php">Contactanos</a></li>
                  <li><a class="grey-text text-lighten-3" href="Creditos.php">Créditos</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2016 Lespool Pizza's
            </div>
          </div>
        </footer>


	<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script>
    		$(document).ready(function() {
    			$(".button-collapse").sideNav();
    			$('.modal-trigger').leanModal();
    			$('.slider').slider({full_width: true});
    			// Pause slider
				$('.slider').slider('pause');
				// Start slider
				$('.slider').slider('start');
				// Next slide
				$('.slider').slider('next');
				// Previous slide
				$('.slider').slider('prev');
  			});
        </script>
</body>
</html>