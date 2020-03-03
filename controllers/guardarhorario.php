<?php 
require_once("../models/guardarhrs.php");
if (isset($_POST['guardar'])){
	$lunes=$_POST['Lunes'];
	$martes=$_POST['Martes'];
	$miercoles=$_POST['Miercoles'];
	$jueves=$_POST['Jueves'];
	$viernes=$_POST['Viernes'];
	$sabado=$_POST['Sabados'];
	$domingo=$_POST['Domingos'];
	$hrinicio=$_POST['hrinicio'];
	$hrfinal=$_POST['hrfinal'];

$array = array();
if (empty($lunes)) {
}
else{
	$array[] = $lunes;
}
if (empty($martes)) {
}
else{
	$array[] = $martes;
}
if (empty($miercoles)) {
}
else{
	$array[] = $miercoles;
}
if (empty($jueves)) {
}
else{
	$array[] = $jueves;
}
if (empty($viernes)) {
}
else{
	$array[] = $viernes;
}
if (empty($sabado)) {
}
else{
	$array[] = $sabado;
}
if (empty($domingo)) {
}
else{
	$array[] = $domingo;
}

$obj=new modeloguardar();
echo $obj->guardar($array,$hrinicio,$hrfinal);

}
?>