<?php 
session_start();
  session_destroy();
?>
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
          <div class="nav-wrapper dw">
            <!-- Modal iniciar sesion y registrarse -->
            
            <a class="d waves-effect waves-light btn modal-trigger white-text green darken-3 " href="#modal2">Crear Cuenta<i class="small material-icons">supervisor_account</i></a>
            <a class="d waves-effect waves-light btn modal-trigger white-text green darken-3" href="#modal1">Iniciar Sesion<i class="small material-icons">lock</i></a><br>
          </div>
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


  <ul class="center">
     <a href="../Administrador/FormularioAgregarProd.php" class="waves-effect waves-light btn-small"><i class="material-icons left">playlist_add</i>Agregar un nuevo Producto</a>
   </ul>


     <div>
      <table align="center">
        <thead>
          <tr>
              <th>Id</th>
              <th>Nombre</th>
              <th>Precio</th>
              <th>Descripciòn</th>
              <th>Tamaño</th>
              <th>Registro</th>
              <th>Acciones</th>
          </tr>
        </thead>

        <tbody>
        <?php
        $sql="SELECT * FROM productos";
        $query = $mysqli->query($sql);
        while ($row=$query->fetch_assoc()) {
        ?>
            <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['nombre'];?></td>
            <td><?php echo $row['precio'];?></td>
            <td><?php echo $row['descripcion'];?></td>
            <td><?php echo $row['registro'];?></td>
            <td><td><a class="btn-floating btn-tiny amber yellow darken-1">
      <i class="material-icons">edit</i><a class="btn-floating btn-tiny red">
      <i class="material-icons">delete</i></td></td>
          </tr>
          <?php } ?>
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