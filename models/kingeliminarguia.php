<?php 
include("bd.php");
class modeloguardar{
       function guardar($id){
       $conl = new callTo();
       $cnx = $conl->callmeBaby();
       mysqli_query($cnx,"DELETE FROM usuarios WHERE id_usuario='$id'");
       mysqli_query($cnx,"DELETE from puesto WHERE id_usuario='$id'");
       mysqli_query($cnx,"DELETE from horarios WHERE id_usuario='$id'");
       mysqli_query($cnx,"DELETE FROM idioma WHERE id_usuario='$id'");
       mysqli_query($cnx,"DELETE FROM datosgenerales WHERE id_usuario='$id'");
       mysqli_query($cnx,"DELETE FROM calificacion WHERE id_usuario='$id'");
       echo "Se guardaron los cambios";
       
   }
  }
?>