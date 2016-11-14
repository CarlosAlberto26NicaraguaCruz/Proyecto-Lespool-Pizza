<?php
class conexion
{
private $conexion;
private $server = "localhost";
private $usuario ="root";
private $pass = "";
private $db = "bdlespool";
private $user;
private $password;

	public function __construct(){
		$this->conexion=new mysqli($this->server,$this->usuario, $this->pass, $this->db);

		if ($this->conexion->connect_errno) {
			die("Fallo de al tratar de conectar con Mi Base de Datos:(". $this->conexion->connect_errno.")");

		}
	}
	public function cerrar(){

		$this->conexion->close();

	}
public function login($usuario,$pass){
	$this->user=$usuario;
	$this->password=$pass;

	$query="SELECT * FROM inicio de sesion WHERE Correo='".$this->user."'and Contraseña = '".$this->password."'";

	$consulta=$this->conexion->query($query);
}
}
?>