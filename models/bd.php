<?php
abstract class con{
	private $servidor;
	private $user;
	private $pass;
	private $bd;

	abstract public function cnx();
}
class conexion extends con{
	public function cnx(){
		$cnx = mysqli_connect($this->servidor,$this->user,$this->pass,$this->bd);
		return $cnx;
	}
}
class callTo{
	public function callmeBaby(){
		$obj = new conexion();
		$obj->servidor = "localhost";
		$obj->user = "root";
		$obj->pass = "";
		$obj->bd = "letstravel";
		return $obj->cnx();
	}
}


 ?>