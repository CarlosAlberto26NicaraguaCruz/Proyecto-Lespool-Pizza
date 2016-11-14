<?php 
  session_start();
  session_destroy();
?>
<?php
require('../inc/conexion1.php');
$consulta="SELECT * FROM usuario";
$resultado=$mysqli->query($consulta);

$consulta="SELECT * FROM inicio de sesion";
$resultado=$mysqli->query($consulta);
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
	
	<!-- Dropdown Structure -->
		 <ul id="dropdown1" class="dropdown-content">
			<li><a href="#!">one</a></li>
			<li><a href="#!">two</a></li>
			<li class="divider"></li>
			<li><a href="#!">three</a></li>
		</ul>

	<div class="navbar-fixed">
		<!--<nav class="teal grey lighten-5" >-->
		<a href="Inicio.php" id="logo" class="brand-logo left"><img id="milogo" src="../img/logo.png"></a>
        
        <div class="nav-wrapper dw">
           
            
			 <a id="btnreg" class="hide-on-med-and-down  waves-effect waves-light btn modal-trigger white-text green darken-3" href="#modal2"><i id="icoreg" class="tiny material-icons">supervisor_account</i>Registrarse</a>
           <!-- Botones modales iniciar sesion -->
	        <!-- <a class="d waves-effect waves-light btn modal-trigger white-text green darken-3" href="#modal1">Iniciar Sesion<i class="small material-icons">lock</i></a><br> -->
		  </div>

		   <div class="row hide-on-med-and-down right">
		    <form action="Menu.php" method="POST" class="col s12">
		      <div class="row center">
		        <div class="input-field col s4">
		          <i class="material-icons prefix">perm_identity</i>
		          <input id="usuario" name="usuario" type="text" class="validate" placeholder="Usuario">
		         
		        </div>
		        <div class="input-field col s4">
		          <i class="material-icons prefix">lock_outline</i>
		          <input id="password" name="password"  type="password" class="validate" placeholder="Contraseña">
		          
		        </div>
		         <div class="col s4">
		         <br>
		      <button type="submit" class=" btn waves-effect waves-light indigo">ENTRAR</button>
		      </div>
		      </div>
		    </form>
		  </div> 

	    <!--</nav>-->
	</div>

	<div class="navbar-inherit">
		<nav>
		<div class="nav-wrapper  light-blue darken-4">
			<!-- activate side-bav in mobile view -->
			<a href="#" data-activates="mobile-demo" class="button-collapse right"><i class="mdi-navigation-menu"></i></a>
			<ul class="brand-logo center hide-on-med-and-down">
				<li class="active"><a href="Inicio.php">Inicio</a></li>
				<li><a href="Menu.php">Menú</a></li>
				<li><a href="Contactanos.php">Contacto</a></li>
				<li><a href="Creditos.php">Créditos</a></li>
				
			</ul>
			</div>
			<!-- navbar for mobile -->
			<ul class="side-nav" id="mobile-demo">
				<li><a href="Inicio.php">Inicio</a></li>
				<li><a href="Menu.php">Menú</a></li>
				<li><a href="Contactanos">Contacto</a></li>
				<li><a href="Crèditos">Créditos</a></li>
				<li><a href="#">Iniciar Sesion</a></li>
				<li><a href="#">Registrarse</a></li>
			</ul>
	    </nav>
   </div>
	
	<div class="slider container">
    <ul class="slides">
      <li>
        <img src="../img/hawaiana.png"> <!-- random image -->
        <div class="caption center-align">
          <h3 class="black-text">Pizza Hawaiana</h3>
          <h5 class="light black-text text-lighten-3"><strong>La mejor Pizza al mejor precio</strong></h5>
        </div>
      </li>
      <li>
        <img src="../img/mexicana.png"> <!-- random image -->
        <div class="caption left-align">
          <h3 class="black-text">Pizza Mexicana</h3>
          <h5 class="light black-text text-lighten-3"><strong>La mejor Pizza al mejor precio</strong></h5>
        </div>
      </li>
      <li>
        <img src="../img/pepperoni.png"> <!-- random image -->
        <div class="caption right-align">
          <h3 class="black-text">Pizza Pepperoni</h3>
          <h5 class="light black-text text-lighten-3"><strong>La mejor Pizza al mejor precio</strong></h5>
        </div>
      </li>
      <li>
        <img src="../img/Napolitana.png"> <!-- random image -->
        <div class="caption center-align">
          <h3 class="black-text">Pizza Napolitana</h3>
          <h5 class="light black-text text-lighten-3"><strong>La mejor Pizza al mejor precio</strong></h5>
        </div>
      </li>
    </ul>
  </div> <br>

	
	<section class="ex container center">
		<h4 class="black-text"><strong>Nuevos Productos</strong></h4><br><br>
		<hr class="green darken-3">
		<div class="row">

		<a href="../Cliente/Menu.php">
			<div class="col s12 m4 l4">
				<div class="card"><br>
				<span class="card-title black-text"><strong>Pizza Mexicana</strong></span><br>
					<div class="card-image">
						<img src="../img/mexicana.png">
					</div>
					<div class="card-content black-text">
						<p class="center-align"><strong>Pizza típica de México con ingredientes de la zona como:</strong></p> <br><br>
						<p style="text-align: justify;">
							Las mejores tortillas de maiz frito
							el mejor acaeite vegetal del pais
							queso chedar, la mejor carne sazonada
							y ademas cevolla sobre la pizza los 
							mejores tomates seleccionados.
						</p>
					</div>
				</div>
			</div>
			</a>

            <a href="../Cliente/Menu.php">
			<div class="col s12 m4 l4">
			<div class="card"><br>
			<span class="card-title black-text"><strong>Pizza Pepperoni</strong></span><br>
					<div class="card-image">
						<img src="../img/pepperoni.png">
					</div>
					<div class="card-content black-text">
						<p class="center-align"><strong>La Pizza típica con un toque Nica ingredientes como:</strong></p> <br><br>
						<p style="text-align: justify;">
						Las mejores verduras frescas selección
						de las tierras de agricultores de la zona
						, lo mejor en queso parmesano, lo mejor
						en carnes de pepperoni de los mejores
						matadores de Nicaragua.
						</p>
					</div>
				</div>
			</div>
			</a>

            <a href="../Cliente/Menu.php">
			<div class="col s12 m4 l4">
			<div class="card"><br>
			<span class="card-title black-text"><strong>Pizza Hawaiana</strong></span><br>	
					<div class="card-image">
						<img src="../img/hawaiana.png">
					</div>
					<div class="card-content black-text">
						<p class="center-align"><strong>Pizza típica con sabor esquicito ingredientes como:</strong></p> <br><br>
						<p style="text-align: justify;">
						Las mejores frutas frescas selección
						de los de agricultores de la zona
						, la mejor piña, lo mejor
						en carnes de los mejores con masa
						 de harina de maiz.
						</p>
					</div>
				</div>
			</div>
            </a>
		</div>
	</section><br><br>



	<section class="ex container center">
		<div class="row">
		
			<a href="../Cliente/Menu.php">
			<div class="col s12 m4 l4">
				<div class="card"><br>
				<span class="card-title black-text"><strong>Pizza Especial</strong></span><br>
					<div class="card-image">
						<img src="../img/especial.jpg">
					</div>
					<div class="card-content black-text">
						<p class="center-align"><strong>La pizza especial para ti para aquellos con antojos especificos:</strong></p> <br><br>
						<p style="text-align: justify;">
						La mejor seleccion en embutidos 
						nicaraguenses, las mejores legumbres 
						del mercado siempre frescas para esos 
						antojos que son completamente unicos.
						</p>
					</div>
				</div>
			</div>
			</a>

            <a href="../Cliente/Menu.php">
			<div class="col s12 m4 l4">
			<div class="card"><br>
			<span class="card-title black-text"><strong>Pizza HotDog</strong></span><br>
					<div class="card-image">
						<img src="../img/hotdog.jpg">
					</div>
					<div class="card-content black-text">
						<p class="center-align"><strong>La pizza con extra de levadura que hace crugiente el sabor</strong></p> <br><br>
						<p style="text-align: justify;">
						La mejor masa en harina de trigo lo mejor en aceite vegetal, tomate frito para mantener en sabor desde el fondo de la pizza
						</p>
					</div>
				</div>
			</div>
			</a>

            <a href="../Cliente/Menu.php">
			<div class="col s12 m4 l4">
			<div class="card"><br>
			<span class="card-title black-text"><strong>Pizza Mixta</strong></span><br>	
					<div class="card-image">
						<img src="../img/mixta.jpg">
					</div>
					<div class="card-content black-text">
						<p class="center-align"><strong>La pizza especial para ti para aquellos con antojos especificos:</strong></p> <br><br>
						<p style="text-align: justify;">
						Para esos antojos que aveses no se distinguen
						o que quieren todo sabor pensando en una pizza que los haga distintas de las demas
						</p>
					</div>
				</div>
			</div>
            </a>

		</div>
	</section><br><br><br>


	<!--MODAL INICIAR SESION-->
	    <!-- <div id="modal1" class="modal">
			<div class="modal-content">
				<h4>Iniciar Sesión</h4>
				<div class="row">
					<form action="Menu.php" method="POST" class="cold s12">
						<div class="row">
							<div class="input-field cold s12">
							    <i class="small material-icons">perm_identity</i>
								<input type="text" id="usuario" name="usuario" class="validate" placeholder="Usuario">
							</div>

							<div class="input-field cold s12">
							    <i class="small material-icons">vpn_key</i>
								<input type="password" id="password" name="password" class="validate" placeholder="Contraseña">
							</div>
						</div>
						<button type="submit" class="btn waves-effect waves-light green darken-3"><i class="mdi-content-send right"></i>Enviar</button>
					</form>
				</div>
			</div>
				<div class="modal-footer">
					<a href="#" class="waves-effect waves-green btn-flat modal-action modal-close ">Cerrar</a>
				</div>
		</div> -->



<!--MODAL CREAR CUENTA-->
			<div id="modal2" style="width: 860px;"  class="modal">
				<div style="" class="">
					<h5 class="center" >Crear Cuenta</h5>
					<div class="row">
						<form action="inicio.php" method="POST" class="col s12">
							<div class="row">
								<div class="input-field col s6">
								   <i class="small material-icons prefix">perm_identity</i>
									<input type="text" id="nombre" name="nom" class="validate" placeholder="Nombre">
								</div>

								<div class="input-field col s6">
								<i class="small material-icons prefix">perm_identity</i>
									<input type="text" id="apellidos" name="ape" class="validate" placeholder="Apellidos">
								</div>

								<div class="input-field col s6">
								<i class="small material-icons prefix">email</i>
									<input type="text" id="correo" name="correo" class="validate" placeholder="Correo">
								</div>

								<div class="input-field col s6">
								<i class="small material-icons prefix">call</i>
									<input type="text" id="telefono" name="tel" class="validate" placeholder="Telefono">
								</div>

								<div class="input-field col s6">
								<i class="small material-icons prefix">call_split</i>
									<input type="text" id="direccion" name="dir" class="validate" placeholder="Direccion">
									
								</div>

								<div class="input-field col s6">
								<i class="small material-icons prefix">lock_open</i>
									<input type="password" id="contraseña" name="contra" class="validate" placeholder="Contraseña">
								</div>
							</div>
								<div class="center ">
								
								<button type="submit" class="btn waves-effect waves-light green darken-4"><i class="mdi-content-send right"></i>Hecho</button>
							</div>
							
							<div class="modal-footer">
					<a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Cerrar</a>
				        </div>
						</form>
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

	<script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
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
        <script>
        	$(document).ready(function(){
        		 $('.materialboxed').materialbox();
        	});
        </script>
</body>
</html>