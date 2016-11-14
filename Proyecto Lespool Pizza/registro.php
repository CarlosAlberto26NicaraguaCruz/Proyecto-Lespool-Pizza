<?php
include ("conexion1.php");

$n=$_POST['nombre'];
$a=$_POST['apellidos'];
$c=$_POST['correo'];
$t=$_POST['telefono'];
$di=$_POST['direccion'];
$con=$_POST['contraseña'];
$confc=$_POST['confcontrasena'];

$insertar = "INSERT INTO usuario(Nombre,Apellidos,Correo,Telefono,Direccion,Contraseña,Val_Contraseña) VALUES ('$n','$a','$c','$t','$di','$con','$confc')";
$insertar1 = "INSERT INTO inicio de sesion(Correo,Contraseña) VALUES ('$c','$con')"

$resultado = $mysqli->query($insertar);
$resultado1 = $mysqli->query($insertar1);

header('Location:../inc/inicio.php')