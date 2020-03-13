<?php 
include("bd.php");
class modeloconsulta{
       function consul(){
       $guia = new callTo();
       $cnx = $guia->callmeBaby();
       $cons=mysqli_query($cnx,"SELECT* FROM usuarios INNER JOIN puesto ON usuarios.id_usuario=puesto.id_usuario WHERE puesto.id_puesto='3'");
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