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
    <link rel="stylesheet" href="../css/estiloadmon.css">
    </head>
<body>
    
    <div class="navbar-fixed">

        <!--<nav class="teal grey lighten-5" >-->
        <!--<a href="#!" id="logo" class="brand-logo left"><img src="../img/logo.png" alt=""></a>-->
        <!--</nav>-->
    </div>

    <div class="navbar-inherit">
        <nav>
        <div class="nav-wrapper deep-orange darken-4">
            <a href="#!" class="center brand-logo">Administrador Principal</a>
              <ul class="left hide-on-med-and-down">
                <li class="active"><a href="../Administrador/Inicioadmon.php"><i class="material-icons left">business</i>Inicio</a></li>
                <li><a href="../Administrador/Productos.php"><i class="material-icons left">subject</i>Productos</a></li>
                <li><a href="../Administrador/Ordenes.php"><i class="material-icons left">dns</i>Ordenes</a></li>
              </ul>
       </div>
       <div>

            <!-- navbar for mobile -->
            <ul class="side-nav" id="mobile-demo">
                <li><a href="../Inicioadmon.php">Inicio</a></li>
                <li><a href="../Productos.php">Menú</a></li>
                <li><a href="../Cotactanos.php">Contacto</a></li>
                <li><a href="#">Créditos</a></li>
                <li><a href="#">Iniciar Sesion</a></li>
                <li><a href="#">Registrarse</a></li>
            </ul>
            </div>

        </nav>
   </div>
  <br><br><br>

   <div>
      <table class="striped" align="center">
        <thead>
          <tr>
              <th data-field="id">Id</th>
              <th data-field="name">Nombre Cliente</th>
              <th data-field="price">Fecha de Compra</th>
              <th data-field="id">Precio</th>
              <th data-field="name">Descripción</th>
              <th data-field="price">Tamaño</th>
              <th data-field="price">Cantidad</th>
              <th data-field="price">TotalCompra</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>1</td>
            <td>Mauricio Martinez</td>
            <td>05/10/2016</td>
            <td>Pizza Hawaiana</td>
            <td>320</td>
            <td>Pizza creada con las mejor harina y frutas del mercado</td>
            <td>8 Piezas</td>
            <td>2</td>
            <td>640</td>

          </tr>
          <tr>
            <td>1</td>
            <td>Mauricio Martinez</td>
            <td>05/10/2016</td>
            <td>Pizza Hawaiana</td>
            <td>320</td>
            <td>Pizza creada con las mejor harina y frutas del mercado</td>
            <td>8 Piezas</td>
            <td>2</td>
            <td>640</td>
          </tr>
          <tr>
            
            <td>1</td>
            <td>Mauricio Martinez</td>
            <td>05/10/2016</td>
            <td>Pizza Hawaiana</td>
            <td>320</td>
            <td>Pizza creada con las mejor harina y frutas del mercado</td>
            <td>8 Piezas</td>
            <td>2</td>
            <td>640</td>
          </tr>
            <tr>
            <td>1</td>
            <td>Mauricio Martinez</td>
            <td>05/10/2016</td>
            <td>Pizza Hawaiana</td>
            <td>320</td>
            <td>Pizza creada con las mejor harina y frutas del mercado</td>
            <td>8 Piezas</td>
            <td>2</td>
            <td>640</td>

          </tr>
          <tr>
            <td>1</td>
            <td>Mauricio Martinez</td>
            <td>05/10/2016</td>
            <td>Pizza Hawaiana</td>
            <td>320</td>
            <td>Pizza creada con las mejor harina y frutas del mercado</td>
            <td>8 Piezas</td>
            <td>2</td>
            <td>640</td>
          </tr>
          <tr>
            
            <td>1</td>
            <td>Mauricio Martinez</td>
            <td>05/10/2016</td>
            <td>Pizza Hawaiana</td>
            <td>320</td>
            <td>Pizza creada con las mejor harina y frutas del mercado</td>
            <td>8 Piezas</td>
            <td>2</td>
            <td>640</td>
          </tr>
          </tr>
        </tbody>
      </table>
   </div>

    <br><br><br>
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
                  <li><a class="grey-text text-lighten-3" href="Inicioadmon.php">Inicio</a></li>
                  <li><a class="grey-text text-lighten-3" href="Productos.php">Productos</a></li>
                  <li><a class="grey-text text-lighten-3" href="Ordenes.php">Ordenes</a></li>
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
        <script>
            $(document).ready(function() {
            // Show sideNav
            $('button-collapse').sideNav('show');
            // Hide sideNav
            $('button-collapse').sideNav('hide');
                      });
        </script>
</body>
</html>