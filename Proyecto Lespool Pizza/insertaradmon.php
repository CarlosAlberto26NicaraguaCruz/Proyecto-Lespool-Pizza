<?php
include("../CONEXION.php");
$n=$_POST['nom'];
$p=$_POST['pre'];
$d=$_POST['des'];
$ti=$_POST['tip'];
$f=$_POST['fec'];

$consulta="INSERT INTO productos(Nombre,Precio,Descripcion,Tamaño,Registro) 
VALUES('$n','$p','$d','$ti','$f')";
$resultado=$mysqli->query($consulta);
header("location:../Administrador/Productos.php");
?>