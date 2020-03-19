<?php 
include("bd.php");
class modeloguardar{
       function guardar(){
       $conlil = new callTo();
       $cnx = $conlil->callmeBaby();
       
       $cons=mysqli_query($cnx,"SELECT* from vistahorario INNER JOIN usuarios on usuarios.id_usuario=vistahorario.id_usuario");
       $retorno=[];
       $i=0;
       while ($fila=$cons->fetch_array()){
       	$retorno[$i]=$fila;
       	$i++;
       }
       return $retorno;       
   }
  }

?>