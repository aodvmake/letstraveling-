<?php 
include("../views/updateGuia.php");
include("../models/actualiza.php");

$email=$_SESSION['email'];
//Si oprime diferente boton //
if (isset($_POST['actpass'])) {
	$pass=$_POST['pass'];
	$obj=new modeloguardar();
	echo $obj->guardarpass($pass,$email);
}
if (isset($_POST['actphone'])) {
	$telefono=$_POST['telefono'];
	$objt=new modeloguardartele();
	echo $objt->guardartele($telefono,$email);
}
if(isset($_POST['actdomi'])) {
    $domicilio=$_POST['domicilio'];
    $objd=new modeloguardardomicilio();
	echo $objd->guardardomi($domicilio,$email);
}
if(isset($_POST['actcol'])) {
     $colonia=$_POST['colonia'];
    $objc=new modeloguardarcolonia();
	echo $objc->guardarcolonia($colonia,$email);
}
if (isset($_POST['actndom'])) {
    $ndomicilio=$_POST['ndomicilio'];
    $objnd=new modeloguardarndom();
	echo $objnd->guardarndom($ndomicilio,$email);
}
if (isset($_POST['actmun'])) {
	$municipio=$_POST['municipio'];
	$objm=new  modeloguardarmuni();
	echo $objm->guadarmuni($municipio,$email);

}

?>