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
	
	<!-- Dropdown Structure -->
		<ul id="dropdown1" class="dropdown-content">
			<li><a href="#!">one</a></li>
			<li><a href="#!">two</a></li>
			<li class="divider"></li>
			<li><a href="#!">three</a></li>
		</ul>

   

  
	<div class="navbar-fixed ">

		<!--<nav class="teal grey lighten-5" >-->
		<a href="#!" id="logo" class="brand-logo left"><img id="milogo" src="../img/logo.png" alt=""></a>
		<h5 class="center " style="color: #01579b" ><font face="Comic Sans MS,arial,verdana" >Excelente sabor para disfrutar!!!</font></h5>
		  
	    <!--</nav>-->
	</div>
	<div class="navbar-inherit">
		<nav>
		<div class="nav-wrapper  light-blue darken-4">
			<!-- activate side-bav in mobile view -->
			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
			<ul class="brand-logo center hide-on-med-and-down">
				<li><a href="Inicio.php">Inicio</a></li>
				<li class="active"><a href="Menu.php">Menú</a></li>
				<li><a href="Contactanos.php">Contacto</a></li>
				<li><a href="Creditos.php">Créditos</a></li>
				
			</ul>
			</div>
			<!-- navbar for mobile -->
			<ul class="side-nav" id="mobile-demo">
				<li><a href="Inicio.php">Inicio</a></li>
				<li><a href="Menu.php">Menú</a></li>
				<li><a href="Contactanos.php">Contacto</a></li>
				<li><a href="Creditos.php">Créditos</a></li>
				<li><a href="#">Iniciar Sesion</a></li>
				<li><a href="#">Registrarse</a></li>
			</ul>

	    </nav>
   </div>
	
	<section class="ex container center">
		<h4 class="black-text"><strong>Menú de Productos</strong></h4><br><br>
		<hr class="green darken-3">
		<div class="row">

		<div class="col s12 m4 l4">
			<div class="card">
			    <div class="card-image waves-effect waves-block waves-light"><br><br>
			      <img class="activator" src="../img/mexicana.png">
			    </div>
				    <div class="card-content">
				      <span class="card-title activator grey-text text-darken-4">Pizza Mexicana<i class="material-icons right">more_vert</i></span><br><br>
				      <a class="hide-on-med-and-down  waves-effect waves-light btn modal-trigger white-text green darken-3" href="#modal1">Ordenar<i class="material-icons right">redeem</i></a>
				    </div>
					    <div class="card-reveal">
					     <p class="left-align"><strong>Pizza típica de México con ingredientes de la zona: </strong></p>
					      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
					      <p class="left-align">-Masa de pizza <br>
							-Salsa de tomate <br>
							-Mozzarella fresca <br>
							-Chorizo picante <br>
							-Jalapeños <br>
							-Aceite de oliva virgen extra</p>
					    </div>
			</div>
	   </div>

	    <div class="col s12 m4 l4">
			<div class="card">
			    <div class="card-image waves-effect waves-block waves-light"><br><br>
			      <img class="activator" src="../img/pepperoni.png">
			    </div>
				    <div class="card-content">
				      <span class="card-title activator grey-text text-darken-4">Pizza Peperoni<i class="material-icons right">more_vert</i></span><br><br>
				      <a class="hide-on-med-and-down  waves-effect waves-light btn modal-trigger white-text green darken-3" href="#modal2">Ordenar<i class="material-icons right">redeem</i></a>
				    </div>
					    <div class="card-reveal">
					     <p class="left-align"><strong>Pizza típica de México con ingredientes de la zona: </strong></p>
					      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
					      <p class="left-align">-Masa de pizza <br>
							-Salsa de tomate <br>
							-Mozzarella fresca <br>
							-Chorizo picante <br>
							-Jalapeños <br>
							-Aceite de oliva virgen extra</p>
					    </div>
			</div>
	   </div>

	<div class="col s12 m4 l4">
			<div class="card">
			    <div class="card-image waves-effect waves-block waves-light"><br><br>
			      <img class="activator" src="../img/hawaiana.png">
			    </div>
				    <div class="card-content">
				      <span class="card-title activator grey-text text-darken-4">Pizza Hawaiana<i class="material-icons right">more_vert</i></span><br><br>
				      <a class="hide-on-med-and-down  waves-effect waves-light btn modal-trigger white-text green darken-3" href="#modal3">Ordenar<i class="material-icons right">redeem</i></a>
				    </div>
					    <div class="card-reveal">
					     <p class="left-align"><strong>Pizza típica de México con ingredientes de la zona: </strong></p>
					      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
					      <p class="left-align">-Masa de pizza <br>
							-Salsa de tomate <br>
							-Mozzarella fresca <br>
							-Chorizo picante <br>
							-Jalapeños <br>
							-Aceite de oliva virgen extra</p>
					    </div>
			</div>
	   </div>
	   <div class="col s12 m4 l4">
			<div class="card">
			    <div class="card-image waves-effect waves-block waves-light"><br><br>
			      <img class="activator" src="../img/mexicana.png">
			    </div>
				    <div class="card-content">
				      <span class="card-title activator grey-text text-darken-4">Pizza Mexicana<i class="material-icons right">more_vert</i></span><br><br>
				      <a class="hide-on-med-and-down  waves-effect waves-light btn modal-trigger white-text green darken-3" href="#modal4">Ordenar<i class="material-icons right">redeem</i></a>
				    </div>
					    <div class="card-reveal">
					     <p class="left-align"><strong>Pizza típica de México con ingredientes de la zona: </strong></p>
					      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
					      <p class="left-align">-Masa de pizza <br>
							-Salsa de tomate <br>
							-Mozzarella fresca <br>
							-Chorizo picante <br>
							-Jalapeños <br>
							-Aceite de oliva virgen extra</p>
					    </div>
			</div>
	   </div>

	    <div class="col s12 m4 l4">
			<div class="card">
			    <div class="card-image waves-effect waves-block waves-light"><br><br>
			      <img class="activator" src="../img/pepperoni.png">
			    </div>
				    <div class="card-content">
				      <span class="card-title activator grey-text text-darken-4">Pizza Peperoni<i class="material-icons right">more_vert</i></span><br><br>
				      <a class="hide-on-med-and-down  waves-effect waves-light btn modal-trigger white-text green darken-3" href="#modal5">Ordenar<i class="material-icons right">redeem</i></a>
				    </div>
					    <div class="card-reveal">
					     <p class="left-align"><strong>Pizza típica de México con ingredientes de la zona: </strong></p>
					      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
					      <p class="left-align">-Masa de pizza <br>
							-Salsa de tomate <br>
							-Mozzarella fresca <br>
							-Chorizo picante <br>
							-Jalapeños <br>
							-Aceite de oliva virgen extra</p>
					    </div>
			</div>
	   </div>

	<div class="col s12 m4 l4">
			<div class="card">
			    <div class="card-image waves-effect waves-block waves-light"><br><br>
			      <img class="activator" src="../img/hawaiana.png">
			    </div>
				    <div class="card-content">
				      <span class="card-title activator grey-text text-darken-4">Pizza Hawaiana<i class="material-icons right">more_vert</i></span><br><br>
				      <a class="hide-on-med-and-down  waves-effect waves-light btn modal-trigger white-text green darken-3" href="#modal6">Ordenar<i class="material-icons right">redeem</i></a>
				    </div>
					    <div class="card-reveal">
					     <p class="left-align"><strong>Pizza típica de México con ingredientes de la zona: </strong></p>
					      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
					      <p class="left-align">-Masa de pizza <br>
							-Salsa de tomate <br>
							-Mozzarella fresca <br>
							-Chorizo picante <br>
							-Jalapeños <br>
							-Aceite de oliva virgen extra</p>
					    </div>
			</div>
	   </div>
	</section><br><br>

	

	<section class="ex container center">
		<h4 class="black-text"><strong>Menú de Combos</strong></h4><br><br>
		<hr class="green darken-3">
		<div class="row">
		
			<div class="col s12 m4 l4">
				<div class="card"><br>
				<span class="card-title black-text"><strong>Combo 1</strong></span><br>
					<div class="card-image">
						<img src="../img/combo1.png">
					</div>
					<div class="card-content">
						<p class="left-align"><strong>Pizza típica de México con ingredientes de la zona:</strong> <br><br>
							-Masa de pizza <br>
							-Salsa de tomate <br>
							-Mozzarella fresca <br>
							-Chorizo picante <br>
							-Jalapeños <br>
							-Aceite de oliva virgen extra</p> <br>
							<a class="hide-on-med-and-down  waves-effect waves-light btn modal-trigger white-text green darken-3" href="#modal1">Ordenar<i class="material-icons right">redeem</i></a>
</p>
					</div>
				</div>
			</div>

			<div class="col s12 m4 l4">
			<div class="card"><br>
			<span class="card-title black-text"><strong>Combo 2</strong></span><br>
					<div class="card-image">
						<img src="../img/combo2.png">
					</div>
					<div class="card-content">
						<p class="left-align"><strong>Pizza típica de México con ingredientes de la zona:</strong> <br><br>
							-Masa de pizza <br>
							-Salsa de tomate <br>
							-Mozzarella fresca <br>
							-Chorizo picante <br>
							-Jalapeños <br>
							-Aceite de oliva virgen extra</p> <br>
							<a class="hide-on-med-and-down  waves-effect waves-light btn modal-trigger white-text green darken-3" href="#modal1">Ordenar<i class="material-icons right">redeem</i></a>
</p>
					</div>
				</div>
			</div>

			<div class="col s12 m4 l4">
			<div class="card"><br>
			<span class="card-title black-text"><strong>Combo 3</strong></span><br>	
					<div class="card-image">
						<img src="../img/combo3.png">
					</div>
					<div class="card-content">
						<p class="left-align"><strong>Pizza típica de México con ingredientes de la zona:</strong> <br><br>
							-Masa de pizza <br>
							-Salsa de tomate <br>
							-Mozzarella fresca <br>
							-Chorizo picante <br>
							-Jalapeños <br>
							-Aceite de oliva virgen extra</p> <br>
							<a class="hide-on-med-and-down  waves-effect waves-light btn modal-trigger white-text green darken-3" href="#modal1">Ordenar<i class="material-icons right">redeem</i></a>
</p>
					</div>
				</div>
			</div>

		</div>
	</section><br><br><br>


	<!--MODAL ORDENAR PIZZA-->
		<div id="modal1" class="modal light-green darken-4">
			<div class="modal-content">
			    <div class="row">
		          <div class="card " style="height: 280px;">
			            <div class="card-content white-text">
			            <span class="card-title black-text"><h5><strong>Ordenar</strong></h5></span>
			              <span class="card-title black-text">Pizza Pepperoni 280C$</span>
			              <span class="card-title black-text"><h6>8 Piezas</h6></span>
			              <div class="card-image right" style="width: 200px; height: 200px;">
			            	<img src="../img/mexicana.png">
			              </div>
			              <p class="black-text">Incluye salsa de tomate, Chile + CocaCola 3Litros</p>
			            </div>
			            <div class="card-action" >
			              <a href="#" >Pedir</a>
			              <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close red-text ">Cancelar</a>
			            </div>
		          </div>
		      </div>
			</div>
		</div>
		<div id="modal2" class="modal light-green darken-4">
			<div class="modal-content">
			    <div class="row">
		          <div class="card " style="height: 280px;">
			            <div class="card-content white-text">
			            <span class="card-title black-text"><h5><strong>Ordenar</strong></h5></span>
			              <span class="card-title black-text">Pizza Pepperoni 280C$</span>
			              <span class="card-title black-text"><h6>8 Piezas</h6></span>
			              <div class="card-image right" style="width: 200px; height: 200px;">
			            	<img src="../img/pepperoni.png">
			              </div>
			              <p class="black-text">Incluye salsa de tomate, Chile + CocaCola 3Litros</p>
			            </div>
			            <div class="card-action" >
			              <a href="#" >Pedir</a>
			              <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close red-text ">Cancelar</a>
			            </div>
		          </div>
		      </div>
			</div>
		</div>
		<div id="modal3" class="modal light-green darken-4">
			<div class="modal-content">
			    <div class="row">
		          <div class="card " style="height: 280px;">
			            <div class="card-content white-text">
			            <span class="card-title black-text"><h5><strong>Ordenar</strong></h5></span>
			              <span class="card-title black-text">Pizza Pepperoni 280C$</span>
			              <span class="card-title black-text"><h6>8 Piezas</h6></span>
			              <div class="card-image right" style="width: 200px; height: 200px;">
			            	<img src="../img/hawaiana.png">
			              </div>
			              <p class="black-text">Incluye salsa de tomate, Chile + CocaCola 3Litros</p>
			            </div>
			            <div class="card-action" >
			              <a href="#" >Pedir</a>
			              <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close red-text ">Cancelar</a>
			            </div>
		          </div>
		      </div>
			</div>
		</div>
		<div id="modal4" class="modal light-green darken-4">
			<div class="modal-content">
			    <div class="row">
		          <div class="card " style="height: 280px;">
			            <div class="card-content white-text">
			            <span class="card-title black-text"><h5><strong>Ordenar</strong></h5></span>
			              <span class="card-title black-text">Pizza Pepperoni 280C$</span>
			              <span class="card-title black-text"><h6>8 Piezas</h6></span>
			              <div class="card-image right" style="width: 200px; height: 200px;">
			            	<img src="../img/mexicana.png">
			              </div>
			              <p class="black-text">Incluye salsa de tomate, Chile + CocaCola 3Litros</p>
			            </div>
			            <div class="card-action" >
			              <a href="#" >Pedir</a>
			              <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close red-text ">Cancelar</a>
			            </div>
		          </div>
		      </div>
			</div>
		</div>
		<div id="modal5" class="modal light-green darken-4">
			<div class="modal-content">
			    <div class="row">
		          <div class="card " style="height: 280px;">
			            <div class="card-content white-text">
			            <span class="card-title black-text"><h5><strong>Ordenar</strong></h5></span>
			              <span class="card-title black-text">Pizza Pepperoni 280C$</span>
			              <span class="card-title black-text"><h6>8 Piezas</h6></span>
			              <div class="card-image right" style="width: 200px; height: 200px;">
			            	<img src="../img/pepperoni.png">
			              </div>
			              <p class="black-text">Incluye salsa de tomate, Chile + CocaCola 3Litros</p>
			            </div>
			            <div class="card-action" >
			              <a href="#" >Pedir</a>
			              <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close red-text ">Cancelar</a>
			            </div>
		          </div>
		      </div>
			</div>
		</div>
		<div id="modal6" class="modal light-green darken-4">
			<div class="modal-content">
			    <div class="row">
		          <div class="card " style="height: 280px;">
			            <div class="card-content white-text">
			            <span class="card-title black-text"><h5><strong>Ordenar</strong></h5></span>
			              <span class="card-title black-text">Pizza Pepperoni 280C$</span>
			              <span class="card-title black-text"><h6>8 Piezas</h6></span>
			              <div class="card-image right" style="width: 200px; height: 200px;">
			            	<img src="../img/hawaiana.png">
			              </div>
			              <p class="black-text">Incluye salsa de tomate, Chile + CocaCola 3Litros</p>
			            </div>
			            <div class="card-action" >
			              <a href="#" >Pedir</a>
			              <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close red-text ">Cancelar</a>
			            </div>
		          </div>
		      </div>
			</div>
		</div>



<!--MODAL CREAR CUENTA-->
			<div id="modal2" class="modal">
				<div class="modal-content">
					<h4>Crear Cuenta</h4>
					<div class="row">
						<form action="registro.php" method="POST" class="col s12">
							<div class="row">
								<div class="input-field col s6">
									<input type="text" id="nombre" name="nom" class="validate">
									<label for="primero">Nombre</label> <br>
								</div>

								<div class="input-field col s6">
									<input type="text" id="apellidos" name="ape" class="validate">
									<label for="segundo">Apellidos</label>
								</div>

								<div class="input-field col s6">
									<input type="text" id="correo" name="correo" class="validate">
									<label for="tercero">Correo</label>
								</div>

								<div class="input-field col s6">
									<input type="text" id="telefono" name="tel" class="validate">
									<label for="segundo">Telefono</label>
								</div>

								<div class="input-field col s6">
									<input type="text" id="direccion" name="dir" class="validate">
									<label for="segundo">Dirección</label>
								</div>

								<div class="input-field col s6">
									<input type="password" id="contraseña" name="contra" class="validate">
									<label for="segundo">Contraseña</label>
								</div>

								<div class="input-field col s6">
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
    			$('.modal-trigger').leanModal();
  			});
        </script>
</body>
</html>