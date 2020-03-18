<?php  
require_once("../models/kingeliminarguia.php");
if (isset($_REQUEST['request'])){
	$id=$_POST['id'];
    $obj=new modeloguardar();
    echo $obj->guardar($id);
     }
?>