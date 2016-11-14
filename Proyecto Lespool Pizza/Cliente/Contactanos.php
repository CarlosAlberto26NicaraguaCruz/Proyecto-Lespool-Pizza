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
				<li class="active"><a href="Cotactanos.php">Contacto</a></li>
				<li><a href="Creditos.php">Créditos</a></li>
				
			</ul>
			</div>

			<!-- navbar for mobile -->
			<ul class="side-nav" id="mobile-demo">
				<li><a href="inicio.php">Inicio</a></li>
				<li><a href="Menu.php">Menú</a></li>
				<li><a href="Cotactanos.php">Contacto</a></li>
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
	            <div class="col s6">
	             <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15604.157584882963!2d-85.37391808504505!3d12.109455578104786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sni!4v1414618732195" width="550" height="400" frameborder="0" style="border:0"></iframe>
	            </div>
            
            <div  class="col s6">
                <h3 class="center">Ubícanos</h3>
                
	            <p><br>
	            <i class="small material-icons">location_on</i>Frente a Gimnasio Power Gym en Juigalpa, Chontales<br> <br>   
                <i class="small material-icons">call</i> (505) 2512 0000<br> <br>
                <i class="small material-icons">email</i><a href="mailto:name@example.com">lespoolpizza@gmail.com</a><br> <br>
                <i class="small material-icons">today</i>Lunes - Domingo: 9:00 AM -- 10:00 PM<br> <br>
                </p>
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