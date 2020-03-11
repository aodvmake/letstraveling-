<?php 
session_start();
include("../models/descripcionhorario.php");

if (isset($_POST['guardar'])){
  $array2 =$_POST['array'];
  $arraylugar=$_POST['arraylugar'];
  $id=$_POST['id'];
  $dia=$_POST['dia'];

 $obj=new modeloguardar();
 echo $obj->guardar($array2,$id,$arraylugar,$dia);
}
?>
<a href="../views/guia.php">Regresar</a>