<?php 
include("../models/guardar.php");

class datos{
 function save(){
  $request = $_REQUEST["request"];
  if ($request == 'data') {
	$correo = $_POST["correo"];
	$pass = $_POST["pass"];
	$telefono=$_POST["telefono"];
	$domicilio=$_POST["domicilio"];
	$colonia=$_POST["colonia"];
	$ndomicilio=$_POST["ndomicilio"];
	$rfc=$_POST["rfc"];
	$curp=$_POST["curp"];
	$estado=$_POST["estado"];
	$municipio=$_POST["municipio"];
	$fecha=$_POST["fecha"];
	$idioma=$_POST["idioma"];
	$obj=new modeloguardar();
	echo $obj->guardar($correo,$pass,$telefono,$domicilio,$colonia,$ndomicilio,$rfc,$curp,$estado,$municipio,$fecha,$idioma);
   }
 }
 function enviar($correo,$pass,$telefono,$domicilio,$colonia,$ndomicilio,$rfc,$curp,$estado,$municipio,$fecha,$idioma){
 $registro= new modeloguardar();
 $registro->guardar($correo,$pass,$telefono,$domicilio,$colonia,$ndomicilio,$rfc,$curp,$estado,$municipio,$fecha,$idioma);	
 }
}
$variable=new datos();
echo $variable->save();

?>