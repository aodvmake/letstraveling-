<?php 
require_once("../models/coments.php");
if (isset($_REQUEST['request'])) {
	$comentario=$_POST['addcoment'];
	$rating=$_POST['rating'];
	if($comentario==""){
	 echo "comentario vacio";
	}
	else{
    $obj=new modeloguardar();
    echo $obj->guardar($comentario,$rating);
     }
}
?>