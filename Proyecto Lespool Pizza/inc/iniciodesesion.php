<?php
include ("../inc/conexion.php");

$user=$_POST['usuario'];
$pass=$_POST['password'];

$wish=new conexion;
$wish->login($user,$pass);
$wish->cerrar();
?>