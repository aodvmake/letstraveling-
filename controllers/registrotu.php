<?php 
include("../models/guardarreg.php");

class datos{
 function save(){
  $request = $_REQUEST["request"];
  if ($request == 'data') {
	$correo = $_POST["correo"];
	$pass = $_POST["pass"];
	$telefono=$_POST["telefono"];
	$fecha=$_POST["fecha"];

	$obj=new modeloguardar();
	echo $obj->guardar($correo,$pass,$telefono,$fecha);
   }
 }
 function enviar($correo,$pass,$telefono,$fecha,$idioma){
 $registro= new modeloguardar();
 $registro->guardar($correo,$pass,$telefono,$fecha);	
 }
}
$variable=new datos();
echo $variable->save();

?>