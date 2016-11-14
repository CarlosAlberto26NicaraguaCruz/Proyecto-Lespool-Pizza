<?php 
require('../CONEXION.php');
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
                <li><a href="../Administrador/Inicioadmon.php"><i class="material-icons left">business</i>Inicio</a></li>
                <li class="active"><a href="../Administrador/Productos.php"><i class="material-icons left">subject</i>Productos</a></li>
                <li><a href="../Administrador/Ordenes.php"><i class="material-icons left">dns</i>Ordenes</a></li>
              </ul>
       </div>
       <div>
            <!-- navbar for mobile -->
            <ul class="side-nav" id="mobile-demo">
                <li><a href="../Inicioadmon.php">Inicio</a></li>
                <li><a href="../Productos.php">Menú</a></li>
                <li><a href="Cotactanos.php">Contacto</a></li>
                <li><a href="#">Créditos</a></li>
                <li><a href="#">Iniciar Sesion</a></li>
                <li><a href="#">Registrarse</a></li>
            </ul>
            </div>

        </nav>
   </div>
  <br><br><br>

    <div  class="row " align="">
        <div class="col s12">
              <div class="container">
                      <form class=""  action="../insertaradmon.php" method="post">
                        <div class="row">
                         <div class="input-field col s6">
                              <input placeholder="Nombre" id="nombre" type="text" class="validate" name="nom">
                              <label for="Primer Nombre"></label>
                         </div>
                         <div class="input-field col s6">
                             <input placeholder="Precio" id="precio" type="text" class="validate" name="pre">
                             <label for="Primer Nombre"></label>
                         </div>
                        </div>
                        <div class="input-field col s12">
                           <textarea placeholder="Descripción" id="descripcion" class="materialize-textarea" length="120" name="des"></textarea>
                          <label for="textarea1"></label>
                       </div>
                   <div class="col s12">
                     <div class="input-field col s6">
                       <select id="tipo" name="tip">
                         <option value="" selected>Selecciona un Opción</option>
                         <option value="1">Pizza 6 Piezas</option>
                         <option value="2">Pizza 8 Piezas</option>
                         <option value="3">Pizza 12 Piezas</option>
                       </select>
                     </div>
                    <div class="input-field col s6">
                      <input placeholder="Fecha" id="precio" type="date" class="validate" name="fec">
                      <label for="Primer Nombre"></label>
                      <button type="submit" class=" btn waves-effect waves-light green darken-3"><i class="mdi-content-send right"></i>Enviar</button>
                   </div>
                   </div>
                 </form>
              </div>
        </div>
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
                  <li><a class="grey-text text-lighten-3" href="#!">Inicio</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Menú</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Contacto</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Créditos</a></li>
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
          $(document).ready(function(){
            $('select').material_select();
          });
        </script>
</body>
</html>