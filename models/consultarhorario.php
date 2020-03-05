<?php 
include("bd.php");
class modeloconsulta{
       function consul(){
       $conht = new callTo();
       $cnx = $conht->callmeBaby();
       $cons=mysqli_query($cnx,"SELECT* FROM horarios");
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