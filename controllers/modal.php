<?php 
require_once("../models/informacion.php");
if (isset($_REQUEST['request'])) {
	$idempleado=$_POST['id'];
	$obj=new modeloguardar();
    echo $obj->guardar($idempleado);
}

?>